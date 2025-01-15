<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('Accueil')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Cormorant Garamond -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Montserrat -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        {{-- flatpicker --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        
        <!-- Scripts -->
        @vite(['resources/css/global.css', 'resources/js/app.js', 'resources/js/slick-carousel.js', 'resources/js/burger-menu.js', 'resources/js/dark-mode.js'])
    </head>
    <body>

        <header>
            <div>
                <a href="/" aria-label="logo du site QuickBook">
                    <img src="{{ asset('images/quickbook-logo.webp') }}" alt="Logo QuickBook">
                </a>
            </div>
            @include('layouts.navigations.guest_navigation')
            <div class="toggle-container">
                <input type="checkbox" id="dark-mode-toggle">
                <label for="dark-mode-toggle" class="toggle"></label>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>QuickBook - 3W Academy - Hugo SAUVAGE</p>
        </footer>

        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </body>
</html>
