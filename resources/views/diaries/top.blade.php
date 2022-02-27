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
                <p class='body'>日記内容</p>
                <p class='comment'>コメント</p>
                <p class='emoji'>stamp</p>
                
                <a href="" class="btn btn--orane">次へ</a>
              
        </div>
    </body>
</html>