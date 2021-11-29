@extends('layouts.hotel')

@section('body')
    
        <p>お客様登録情報　入力フォーム</p>
        <form action="/User/add" method="post">
            <table>
            @csrf
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            <tr><th>address: </th><td><input type="text" name="address" value="{{old('address')}}"></td></tr>
            <tr><th>tel: </th><td><input type="text" name="tel" value="{{old('tel')}}"></td></tr>
            {{-- <tr><th>password: </th><td><input type="text" name="password" value="{{old('password')}}"></td></tr> --}}
            <tr><th></th><td><input class="btn" type="submit" value="send"></td></tr>
            </table>
        </form>
        @endsection
        <style>
            .btn{
                padding: 5px 15px;
            }
         
         </style>
    

