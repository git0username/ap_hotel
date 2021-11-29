@extends('layouts.hotel')

@section('body')
    
        <p>お客様登録完了</p>
        <form action="/User/add" method="post">
            <table>
            @csrf
            <tr><th>name: </th><td>{{$name}}</td></tr>
            <tr><th>address: </th><td>{{$address}}</td></tr>
            <tr><th>tel: </th><td>{{$tel}}</td></tr>
            <tr><th></th><td>
            {{-- <input type="submit" value="send"></td></tr> --}}
            </table>
            {{-- <tr><th></th><td><input class="btn" type="submit" value="login"></td></tr> --}}
        </form>
        <p><a href="/User/login">ログインページ</p>
@endsection
<style>
   .btn{
       padding: 5px 15px;
   }

</style>
