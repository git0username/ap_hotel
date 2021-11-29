<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $primaryKey = 'userid';

    protected $guarded = array('userid');
    public static $rules = array(
        'name'=> 'required',
        'address'=> 'required',
        'tel'=>'required',
        // 'password'=>'required',
    );

}
