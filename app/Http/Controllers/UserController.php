<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function index(Request $request)
    {
        return view('User.index');
    }

    public function login(Request $request){
        return view('User.login');
    }

    public function login_search(Request $request){
        $item = User::where('userid',$request->userid)->get();
        $param = ['userid'=> $request->userid, 'item'=>$item];
        return view('User.personal',$param);
    }


    public function add(Request $request){
        return view('User.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = new User;
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();    
        return view('User.index', $form);
    }






}
