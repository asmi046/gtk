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

<header class="header" data-js-overlay-menu="">
    <div class="header__inner header-container">
        <x-logo.logo aClass="header__logo"></x-logo.logo>
        <dialog data-js-overlay-menu-dialog="" class="header__overlay-menu-dialog">
            <x-menu-header :items="$menuItems"></x-menu-header>
        </dialog>
        <x-burger.burger></x-burger.burger>
    </div>
</header>
