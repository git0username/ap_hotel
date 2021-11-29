<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="title">Ap_Hotel</title>
</head>

<body>
    <header>
        <h1>ApHotel</h1>
        <nav>
            {{-- <div class="main-nav">
                <p><a href="/user/add">User登録</p>
                <p><a href="/user">ログイン</p>
                <p><a href="/Book/book">宿泊予約</p>
                <p><a href="/Book/booking_list">予約一覧</p>
                <p><a href="/user2">User一覧</p>
            </div> --}}

            <ul class="main-nav">
                <li><a href="/user">利用者一覧</a></li>
                <li><a href="/Book/booking_list">予約一覧</a></li>
            </ul>
            <ul class="main-nav">
                <li><a href="/user/add">利用者一覧</a></li>
                <li><a href="/Book/resv_details">予約明細</a></li>
                <li><a href="/User/login">ログイン</a></li>
            </ul>
        </nav>
    </header>

    <body>
        @yield('body')
    </body>
</body>
<style>
    body {
        color: #333333;
        background-color: #FFFFFF;
        font-size: 100%;
        line-height: 1.7;
        margin: 10px auto;
        width: 90%;
        -webkit-text-size-adjust: 100%;
    }

    a {
        text-decoration: none;
    }

    .main-nav {
        display: flex;          
        list-style: none;
        margin: 10px;
    }

    /* .main-nav{
        display: flex; 
        border: solid black 1px;
    }

    .main-nav p{        
        margin: 10px;
    } */

    .main-nav li {
        margin-left: 15px;

    }

    header h1 {
        color: darksalmon;
    }

    table {
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
        
    }

    table th,
    table td {
        padding: 10px;
        text-align: center;
    }

    table tr:nth-child(odd) {
        background-color: #eee;
    }

</style>

</html>
