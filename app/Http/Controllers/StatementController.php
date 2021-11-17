<?php

namespace App\Http\Controllers;

use App\Book;
use App\Statement;
use Illuminate\Http\Request;

class StatementController extends Controller
{
    public function statement(Request $request)
    {
        $items = Book::all(); //間違いbookに
        return view('Statement.statement',['items'=>$items]);
    }
}
