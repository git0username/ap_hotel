<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    protected $primaryKey = 'statement_ID';

    protected $guarded = array('statement_ID');
    public static $rules = array(
        'book_ID'=> 'required',
        'room_ID'=> 'required',
        'stays'=> 'required',
        'fee'=> 'required',
    );

    public function books()
    {
        return $this->hasMany('App\Book');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
}
