<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

       
    </head>
    <body>
        <h1>Blog name</h1>

        <div class ='post'>
            <h2 class ='title'>{{ $post->title}}</h2>
            <p class 'body'>{{$post->body}}</p>
            <p class 'updated'>{{$post->updated}}</p>
        </div>
        <div class ='back'>[<a href='/'>back</a>]</div>

            </div>
        </div>
    </body>
</html>