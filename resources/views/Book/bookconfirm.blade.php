@extends('layouts.hotel_personal')
@section('login_name')
    <p>ログイン中：userID:{{ $userdata->get('userid') }} 登録名：{{ $userdata->get('name') }}</p>
        {{-- 登録名:{{ $item->first()->name }} 様</p> --}}
@endsection 

@section('body')
        <p>お客様登録完了</p>       
            <table>           
            <tr><th>userid: </th><td>{{$userid}}</td></tr>
            <tr><th>number: </th><td>{{$number}}</td></tr>
            <tr><th>check_in: </th><td>{{$check_in}}</td></tr>
            <tr><th>check_out: </th><td>{{$check_out}}</td></tr>
            <tr><th></th><td>           
            </table>
        </form>
@endsection
