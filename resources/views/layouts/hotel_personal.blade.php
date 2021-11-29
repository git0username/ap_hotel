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
        <body>
            @yield('login_name')
        </body>
        <nav>
            {{-- <div class="main-nav">
                <p><a href="/user/add">User登録</p>
                <p><a href="/user">ログイン</p>
                <p><a href="/Book/book">宿泊予約</p>
                <p><a href="/Book/booking_list">予約一覧</p>
                <p><a href="/user2">User一覧</p>
            </div> --}}

            <ul class="main-nav">
                <li><a href="/Book/book">宿泊予約ページ</a></li>
                <li>
                    <form action="/User/personal_booking_list" method="post"><input type="hidden" name="name" value="$name">
                        <a href="/Book/booking_list">ご予約一覧</a>
                    </form>
                </li>
                <li><a href="/Book/resv_details">ご予約明細</a></li>
                <li><a href="url()->previous()">前のページに戻る</a></li>

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
