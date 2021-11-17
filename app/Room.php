<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'Room_ID';

    protected $guarded = array('Room_ID');
    public static $rules = array(
        'roomtype_ID'=> 'required',
        'room_Number'=> 'required',        
    );
}
