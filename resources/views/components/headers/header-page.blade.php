<x-headers.top-menu class="sticky-menu__page"/>

<div class="header__wrapper __page">
    <div class="header__video-bg">
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/video/gtk.mp4') }}">
            Ваш браузер не поддерживает видео.
        </video>
        {{-- <div class="header__video-overlay"></div> --}}
    </div>

    <div class="container">
        <h1>{{ $title }}</h1>

        @if(!empty($subtitle))
            <p class="subtitle">
                {{ $subtitle }}
            </p>
        @endif

        <a href="#consult" class="button">Получить консультацию</a>
    </div>
</div>
