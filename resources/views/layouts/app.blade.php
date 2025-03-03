<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pily Modroño - @yield('title') </title>
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Josefin+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <header>
        <div class="container">
            <nav class="appbar">
                <a href="/" class="brand-logo">
                    <img src="{{ asset('img/logo.png') }}" alt="Pily Modroño">
                </a>
                <div class="spacer"></div>
                <a href="#" id="menu-button" class="menu-activator">
                    <div class="bar"></div>
                </a>
                <div class="menu-collapse">
                    <ul class="menu-main">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/efecto-pancho">El efecto Pancho</a></li>
                        <li><a href="/media-blog">Media / Blog</a></li>
                        <li><a href="/about-me">Acerca de mi</a></li>
                        <li><a href="/contacto">Contacto</a></li>
                    </ul>
                    <ul class="menu-social">
                        <li><a href="#"><i data-feather="twitter"></i></a></li>
                        <li><a href="#"><i data-feather="instagram"></i></a></li>
                        <li><a href="#"><i data-feather="linkedin"></i></a></li>
                        <li><a href="#"><i data-feather="facebook"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        @yield('page-header')
        @yield('content')
    </main>
    <footer>
        <div class="container">
                <div class="footer-logo">
                        <img src="{{ asset('img/logo-negativo.png') }}" alt="Pily Modroño">
                        <span>&copy; 2019. Todos los derechos reservados</span>
                    </div>
                    <div class="footer-menu">
                        <h5>Menú</h5>
                        <ul>
                            <li><a href="/about-me">Acerca de mi</a></li>
                            <li><a href="/efecto-pancho">El Efecto Pancho</a></li>
                            <li><a href="/media-blog">Media / Blog</a></li>
                            <li><a href="/contacto">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="footer-social">
                        <h5>Mis redes sociales</h5>
                        <ul>
                            <li><a href="#"><i data-feather="twitter"></i></a></li>
                            <li><a href="#"><i data-feather="instagram"></i></a></li>
                            <li><a href="#"><i data-feather="facebook"></i></a></li>
                            <li><a href="#"><i data-feather="linkedin"></i></a></li>
                        </ul>
                    </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
