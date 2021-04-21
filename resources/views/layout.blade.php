<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <title>{{ $category ?? '' }} - {{ $title ?? 'WebTech'}}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="js/app.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,700;1,600&display=swap" rel="stylesheet"> 
    </head>
    <body class="relative">
        <!-- navigation -->
        <nav class="flex flex-col fixed">
            <div class="logo">
                <img src="/img/logo.png" alt="">
            </div>
            <ul class="nav-list">
                <li class="menu-main">
                    Exercises
                    <ul class="menu-sub">
                        <a href="/webtech">
                            <li>
                                Webtech
                            </li>
                        </a>
                        <li>
                            GIG
                        </li>
                        <li>
                            AVG
                        </li>
                    </ul>
                </li>
                <li class="menu-main">About</li>
                <li class="menu-main">Contact</li>
            </ul>
        </nav>


        @yield('content')

        <!-- footer -->
        <footer>

        </footer>
        <div class="cover"></div>
    </body>
</html>
