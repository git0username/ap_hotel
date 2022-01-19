<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;

class BookController extends Controller
{
    public function book(Request $request)
    {
        //  $userdata = $request->session()->get('userid');
        //  $userdata1 = $request->session()->get('name');
        $userdata = $request->session()->get('userdata');        


        //  $userdata = $request->session()->all();


         $date_min = \Carbon\Carbon::now()->format("Y-m-d");
         $date_max = \Carbon\Carbon::now()->addYears(1)->format("Y-m-d");

        return view('Book.book',['userdata'=>$userdata,'datemin'=>$date_min,'datemax'=>$date_max]);

        
         //sessionを継続させる

        // return view('Book.book',['userdata'=>$userdata]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Book::$rules);
        $book = new Book;
        $form = $request->all();
        unset($form['_token']);
        $book->fill($form)->save();

        // $userdata = $request->session()->get('userdata');session持続させる

        return view('Book.bookconfirm', $form);
    }

    public function  booking_list(Request $request)
    {
        $name = User::where('name',$request->name)->get(); //whereでuserIdをとってくる
        // $param = ['name'=> $request->name, 'item'=>$name];
        $items = Book::all(); //userIdが一致するものだけをとってくる
        return view('Book.booking_list',['items'=>$items]);
    }

    // public function  booking_list(Request $request)
    // {
    //     $items = Book::all();
    //     return view('Book.booking_list',['items'=>$items]);
    // }
    
    public function  resv_details(Request $request)
    {
        $items = Book::all();
        return view('Book.resv_details',['items'=>$items]);
    }

    
    // public function seach(Request $request)
    // {
        
    //     $roomtype = Book::where('roomtype',$request->roomtype)


    //     return view('Book.book');
    // }
}
