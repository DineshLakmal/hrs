<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        'room_no', 'room_types_id', 'room_price', 'floor'
    ];
}
