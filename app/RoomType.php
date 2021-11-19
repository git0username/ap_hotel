<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table = 'roomTypes';
    protected $primaryKey = 'roomid';

    protected $guarded = array('roomid');
    public static $rules = array(
        'type'=> 'required',
        'number_of_capacity'=> 'required',        
    );
}
