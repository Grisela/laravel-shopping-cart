<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        @include('layouts.inc.nav')
        <div class="flex-center position-ref full-height">
            <div class="content">
               @yield('content')
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
