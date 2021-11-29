@extends('layouts.hotel')

@section('body')
        <p>予約一覧表</p>        
            <table>                   
            <tr><th>statement_ID</th><th>userid</th><th>name</th><th>address</th><th>tel</th><th>number</th><th>check-in</th><th>check-out</th><th>roomtype</th><th>room_Number</th><th>fee</th></tr>

            @foreach($items as $item)    
            <tr>
            <td>{{$item->bookid}}</td>
            <td>{{$item->userid}}</td>
            <td>{{$item->user->name}}</td>
            <td>{{$item->user->address}}</td>
            <td>{{$item->user->tel}}</td> 
            <td>{{$item->number}}</td>
            <td>{{$item->check_in}}</td>
            <td>{{$item->check_out}}</td>
            @foreach($item->room as $room)
            <td>{{$room->roomtype}}</td>
            @endforeach
            <td>{{$item->room->first()->room_Number}}</td>
            <td>{{$item->room->first()->pivot->fee}}</td>
            </tr>
            @endforeach
            </table>
            @endsection
            

