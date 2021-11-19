<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function  room_list(Request $request)
    {
        $items = Room::all();
        return view('Room.room_list',['items'=>$items]);
    } 
}
