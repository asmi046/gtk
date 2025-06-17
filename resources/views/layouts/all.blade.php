<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')">

    @header_seo

    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{asset('/img/favicons/fav.svg')}}" sizes="any">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/scss/main.scss'])
</head>

<body>

    <main id="main">
        @yield('main')
    </main>

    <x-footer></x-footer>

    <div class="modal_win" id="modal_app">
        <cookies-warning
            privacy-policy-link="{{ route('page', 'politika-v-oblasti-obrabotki-personalnyx-dannyx') }}"
            cookies-info-link="{{ route('page', 'o-failax-sookie') }}"
            privacy-policy-accept-link="{{ route('page', 'soglasie-na-obrabotku-personalnyx-dannyx') }}"
        />
    </div>
</body>

</html>
