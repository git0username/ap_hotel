@extends('layouts.hotel_personal')
@section('login_name')
    <p>ログイン中：userID:{{ $userdata->get('userid') }} 登録名：{{ $userdata->get('name') }}</p>
        {{-- 登録名:{{ $item->first()->name }} 様</p> --}}
@endsection 

@section('body')
    
        <p>予約入力フォーム</p>
        <form action="/Book/book" method="post">
            <table>
            @csrf
            <input type="hidden" name="userid" value="{{$userdata->get('userid')}}">

            {{-- <tr><th>roomtype: </th><td><input type="text" name="roomtype" value="{{old('roomtype')}}"></td></tr> --}}

            <tr><th>宿泊人数: </th><td><input type="text" name="number" value="{{old('number')}}"></td></tr>
            <tr><th>チェックイン日: </th><td><input type="date" name="check_in" min="{{$datemin}}" max="{{$datemax}}" value="{{old('check_in')}}"></td></tr>
            <tr><th></th><td>
            <tr><th>チェックアウト日: </th><td><input type="date" name="check_out"  min="{{$datemin}}" max="{{$datemax}}"  value="{{old('check_out')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
            </table>
        </form>
        
        <p> <?php echo \Carbon\Carbon::now()->format("Y-m-d")?></p>
        <p>{{$datemax}} {{}}</p>
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

