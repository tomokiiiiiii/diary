<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>みんなの日記</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{asset('/css/top.css')}}" rel="stylesheet">
    </head>
    <body>
        <h1>日記</h1>
        <div class='toppages'>
            <p class='body'>{{$diary->diary}}</p>
            {{-- <p class='comment'>{{&diary-></p> --}}
            <p class='updated_at'>{{ $diary->updated_at }}</p>
        </div>
        <div class='back'>[<a href='/'>戻る</a>]</div>
    </body>
</html>