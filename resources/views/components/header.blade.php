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
        <hr class="hd__line hd__line--left">
        <hr class="hd__line hd__line--right">
        <hr class="hd__line hd__line--vertical">
        <hr class="hd__line hd__line--side1">
        <hr class="hd__line hd__line--side2">
        <div class="header__inner">
            <div class="container">
                <div class="header__title">
                    <h1>Производство<br> и поставка <br>Металлоконструкций</h1>
                    <button type="button" class="btn header__title-btn">Скачать каталог</button>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="header__content">
                    <div class="header__content-item">
                        <div class="header__content-item--number">
                            <span>25</span>
                        </div>
                        <div class="header__content-item--text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, repellat.
                        </div>
                    </div>
                    <div class="header__content-item">
                        <div class="header__content-item--number">
                            <span>43</span>
                        </div>
                        <div class="header__content-item--text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, repellat.
                        </div>
                    </div>
                    <div class="header__content-item">
                        <div class="header__content-item--number">
                            <span>115</span>
                        </div>
                        <div class="header__content-item--text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, repellat.
                        </div>
                    </div>
                    <div class="header__content-item">
                        <div class="header__content-item--contacts">
                            <a class="call_phone" href="tel:+74712735400">+7 (4712) 73 54 00</a>
                            <a class="sand_email" href="mailto:kursk@glavtk.ru">kursk@glavtk.ru</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>
