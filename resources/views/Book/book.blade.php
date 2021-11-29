@extends('layouts.hotel_personal')

@section('body')
    
        <p>予約入力フォーム</p>
        <form action="/Book/book" method="post">
            <table>
            @csrf
            <tr><th>userid: </th><td><input type="text" name="userid" value="{{old('name')}}"></td></tr>
            
            {{-- <tr><th>roomtype: </th><td><input type="text" name="roomtype" value="{{old('roomtype')}}"></td></tr> --}}

            <tr><th>number: </th><td><input type="text" name="number" value="{{old('number')}}"></td></tr>
            <tr><th>check_in: </th><td><input type="text" name="check_in" value="{{old('check_in')}}"></td></tr>
            <tr><th></th><td>
            <tr><th>check_out: </th><td><input type="text" name="check_out" value="{{old('check_out')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
            </table>
        </form>
        @endsection

        <style>
            table{
                width: 80%;
                border-collapse: collapse;
                border-spacing: 0;
                text-align: center
            }
            table th, table td{
                padding: 10px 0;
                text-align: center;
            }
            table tr:nth-child(odd){
                background-color: #eee;
            }
        
        </style>

