<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            table{
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
    }
    table th, table td{
        padding: 10px 0;
        text-align: center;
    }
    table tr:nth-child(odd){
        background-color: #eee;
    }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <p>予約一覧表</p>        
            <table>                   
            <tr><th>statement_ID</th><th>userid</th><th>name</th><th>address</th><th>tel</th><th>number</th><th>check-in</th><th>check-out</th></tr>

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
            {{-- <td>{{$item->room->statement_ID}}</td>
            <td>{{$item->room->book_ID}}</td>
            <td>{{$item->room->roomtype}}</td>
            <td>{{$item->room->stays}}</td>
            <td>{{$item->room->fee}}</td> --}}
            
            </tr>
         
            
            @endforeach
            </table>
        
    </body>
</html>
