<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('User','UserController@index');


Route::get('User/add','UserController@add');
Route::post('User/add','UserController@create');

Route::get('Book/book','BookController@book');
Route::post('Book/book','BookController@create');
Route::get('Book/booking_list','BookController@booking_list');

Route::get('Statement/statement','StatementController@statement');
