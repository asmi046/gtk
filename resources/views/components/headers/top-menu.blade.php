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

<div {{ $attributes->merge(['class' => 'sticky-menu']) }} class="" data-js-overlay-menu="">
    <div class="sticky-menu__inner">
        <x-logo.logo aClass="sticky-menu__logo"></x-logo.logo>
        <x-sticky-menu prefix="menu" :items="$menuItems"></x-sticky-menu>
        <dialog data-js-overlay-menu-dialog="" class="sticky-menu__dialog">
            <x-sticky-menu prefix="sticky-menu" :items="$menuItems"></x-sticky-menu>
        </dialog>
        <x-burger.burger></x-burger.burger>
    </div>
</div>
