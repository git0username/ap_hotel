@extends('layouts.hotel')

@section('body')
    
        <p>ログインページ</p>
        <form action="/User/login" method="post">
            <table>
            @csrf
            <tr><th>userID: </th><td><input type="text" name="userid" value="{{old('userid')}}"></td></tr>
            {{-- <tr><th>password: </th><td><input type="text" name="password" value="{{old('password')}}"></td></tr>             --}}
            <tr><th></th><td><input class="btn" type="submit" value="send"></td></tr>
            </table>
        </form>
        @endsection
        <style>
            .btn{
                padding: 5px 15px;
            }
         
         </style>
    

