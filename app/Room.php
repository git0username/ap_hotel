<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'Room_ID';

    protected $guarded = array('Room_ID');
    public static $rules = array(
        'roomtype'=> 'required',
        'room_Number'=> 'required',        
    );

    public function user()
    {
        //belongsTo(主テーブルの指定、従テーブルの外部キー、対応する主テーブルの主キー)
        return $this->belongsTo('App\RoomType','roomtype','type');//Roomtypesテーブルに繋ぐのではなく、Roomtypeモデル(Roomtype.php)に繋ぐ。
    }
}
