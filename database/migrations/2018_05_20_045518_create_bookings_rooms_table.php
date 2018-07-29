<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings_rooms', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('bookings_id')->unsigned();
            $table->integer('rooms_id')->unsigned();

            $table->timestamps();

            $table->foreign('bookings_id')->references('id')->on('bookings');
            $table->foreign('rooms_id')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings_rooms');
    }
}
