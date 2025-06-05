<x-headers.top-menu/>


<header class="header">
    <div class="header__wrapper">
        <div class="header__video-bg">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/video/gtk.mp4') }}">
                Ваш браузер не поддерживает видео.
            </video>
            <div class="header__video-overlay"></div>
        </div>
        <x-header-inner/>

    </div>

</header>
