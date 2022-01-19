{{-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="title">Ap_Hotel</title>
</head> --}}

@extends('layouts.hotel_personal')

@section('login_name')


    <p>ログイン中：userID:{{ $userid }} 登録名:{{ $item->first()->name }} 様 {{ $item}}</p>

    {{-- <ul class="main-nav">
        <li><a href="/Book/book">宿泊予約ページ</a></li>
        <li>
            <form action="/User/personal_booking_list" method="post"><input type="hidden" name="name" value="$name">
                <a href="/Book/booking_list">ご予約一覧</a>
            </form>
        </li>
        <li><a href="/Book/resv_details">ご予約明細</a></li>
    </ul> --}}

@endsection

@section('body')
<p> </p>
@endsection
<style>

</style>


{{-- </html> --}}
