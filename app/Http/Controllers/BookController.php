<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;

class BookController extends Controller
{
    public function book(Request $request)
    {
         
        return view('Book.book');
    }

    public function create(Request $request)
    {
        $this->validate($request, Book::$rules);
        $book = new Book;
        $form = $request->all();
        unset($form['_token']);
        $book->fill($form)->save();
        return view('Book.bookconfirm', $form);
    }

    public function  booking_list(Request $request)
    {
        $items = Book::all();
        return view('Book.booking_list',['items'=>$items]);
        // return view('Book.booking_list');

    }       

    
    // public function seach(Request $request)
    // {
        
    //     $roomtype = Book::where('roomtype',$request->roomtype)


    //     return view('Book.book');
    // }
}
