<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'bookid';

    protected $guarded = array('bookid)');
    public static $rules = array(
        'userid'=> 'required',
        'number'=> 'required',
        'check-in'=>'required',
        'check-out'=>'required',
    );

    public function user()
    {
        //belongsTo(主テーブルの指定、従テーブルの外部キー、対応する主テーブルの主キー)
        return $this->belongsTo('App\User','Userid','userid');//Usersテーブルに繋ぐのではなく、Userモデル(User.php)に繋ぐ。
    }


}
