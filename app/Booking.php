<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        'name', 'guests', 'extras','check_in','check_out','total_charge','paid'
    ];
}
