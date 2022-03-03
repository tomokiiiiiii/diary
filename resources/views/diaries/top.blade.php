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
        <p class='create'>[<a href='/top/create'>create</a>]</p>
        <div class='toppages'>
            @foreach($diaries as $diary)
                <a href='/top/{{ $diary ->id }}'><p class='body'>{{$diary->diary}}</p></a>
                {{-- <p class='comment'>{{&diary-></p> --}}
            @endforeach
                
                
                <a href="" class="btn btn--orane">書く</a>
              
        </div>
        <div class='paginate'>
            {{ $diaries->links() }}
        </div>
    </body>
</html>