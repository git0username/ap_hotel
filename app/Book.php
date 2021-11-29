<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'bookid';

    protected $guarded = array('bookid');
    public static $rules = array(
        'userid'=> 'required',
        'number'=> 'required',
        'check_in'=>'required',
        'check_out'=>'required',
    );

    public function user()
    {
        //belongsTo(主テーブルのModelの指定、従テーブルの外部キー、対応する主テーブルの主キー)
        return $this->belongsTo('App\User','userid','userid');//Usersテーブルに繋ぐのではなく、Userモデル(User.php)に繋ぐ。
    }

    public function room()
    {
        //多対多のときは、belongsToManyを使う。
        // Book：1つの予約で多数の部屋を予約することがある。
        // Room：1つの部屋に対して、11/2、11/5など違う日付で多数の予約が入る。
        //多対多は直接繋ぐことができないので、間接テーブルを作成して、それと繋ぐしかない。
        // belongsToMany(相手テーブル(Room)のModelの指定、間接テーブル名、対応する間接テーブルの外部キー（一方の多（Room）のテーブルと対応するキー）、対応する間接テーブルの外部キー（もう一方の多（Book）のテーブルと対応するキー）)
        return $this->belongsToMany('App\Room','statements','room_ID','book_ID')->withPivot('stays','fee');
    }

}
