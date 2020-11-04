<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Francois+One&family=Montserrat&display=swap" rel="stylesheet"> 

        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <link href="/css/landing.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    </head>
    <body>
        @include('layouts.inc.nav')
        <div class="flex-center position-ref full-height">
            <div class="content">
               @yield('content')
            </div>
        </div>
        <script src="/js/app.js"></script>
        <script src="/js/crud.js"></script>
    </body>
</html>
