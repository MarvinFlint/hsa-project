<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <title>{{ $category ?? '' }} - {{ $title ?? 'WebTech'}}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="js/app.js"></script>
    </head>
    <body class="relative">
        <!-- navigation -->
        <nav class="flex flex-col fixed">
            <div class="logo">
                <img src="/img/logo.png" alt="">
            </div>
            <ul>
                <li>Home</li>
                <li>Exercises</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </nav>


        @yield('content')

        <!-- footer -->
        <footer>

        </footer>
    </body>
</html>
