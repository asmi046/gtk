@php
    $menuItems = [
        ['route' => 'company', 'label' => 'О компании'],
        ['route' => 'products', 'label' => 'Продукция'],
        ['route' => 'services', 'label' => 'Услуга'],
        ['route' => 'news', 'label' => 'Новости'],
        ['route' => 'vacancies', 'label' => 'Вакансии'],
        ['route' => 'contacts', 'label' => 'Контакты'],
    ];
@endphp

<div class="sticky-menu" data-js-overlay-menu="">
    <div class="sticky-menu__inner">
        <x-logo.logo aClass="sticky-menu__logo"></x-logo.logo>
        <x-sticky-menu prefix="menu" :items="$menuItems"></x-sticky-menu>
        <dialog data-js-overlay-menu-dialog="" class="sticky-menu__dialog">
            <x-sticky-menu prefix="sticky-menu" :items="$menuItems"></x-sticky-menu>
        </dialog>
        <x-burger.burger></x-burger.burger>
    </div>
</div>


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
