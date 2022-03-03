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
        <form action="/diaries" method="POST">
            {{ csrf_field() }}
            <div class="diary">
                <h2>日記内容</h2>
            　　<textarea name="diary[diary]" placeholder="できごと"></textarea>
            </div>
            <div class="picture">
                <h2>写真</h2>
                <input type="file" name="diary[picture]">
            </div>
            <input type="submit" value="次へ"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div> 
    </body>
</html>