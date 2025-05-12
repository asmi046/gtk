<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ГТК | @yield('title', 'ГЛАВТЕХКОНСТРУКЦИЯ')</title>
    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')">

    @header_seo

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('./img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('./img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('./img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('./img/favicons/site.webmanifest') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/scss/main.scss'])
</head>

<body>
    <x-header></x-header>


    <main id="main">
        @yield('main')
    </main>

    <x-footer></x-footer>
</body>

</html>
