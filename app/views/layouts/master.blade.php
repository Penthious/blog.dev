<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/Bootstrap/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/blog.css">
        @yield('css')
        <meta charset="utf-8">
    </head>
    <body>
        @include('.navbar')

        @yield('content')

        @include('.footer')

        <script src="/js/jquery-1.12.0.js"></script>
        <script src"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="/js/navbar.js"></script>
        @yield('js')

    </body>
</html>
