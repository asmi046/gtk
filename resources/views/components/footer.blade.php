@php
    $menuItems1 = [
        ['route' => 'company', 'label' => 'О компании'],
        ['route' => 'products', 'label' => 'Продукция'],
        ['route' => 'services', 'label' => 'Услуга'],
        ['route' => 'news', 'label' => 'Новости'],
        ['route' => 'vacancies', 'label' => 'Вакансии'],
        ['route' => 'contacts', 'label' => 'Контакты'],
    ];

    $menuItems2 = [
        ['route' => 'company', 'label' => 'Продукция'],
        ['route' => 'products', 'label' => 'Продукция1'],
        ['route' => 'services', 'label' => 'Продукция2'],
        ['route' => 'news', 'label' => 'Продукция3'],
        ['route' => 'vacancies', 'label' => 'Продукция4'],
        ['route' => 'contacts', 'label' => 'Продукция5'],
    ];
@endphp

<footer class="footer">
    <div class="footer__inner container">
        <x-logo.logo src="img/logo-footer.svg"></x-logo.logo>
        <div class="footer__navigation">
            <x-menu-footer :items="$menuItems1"></x-menu-footer>
            <x-menu-footer :items="$menuItems2"></x-menu-footer>
        </div>
        <div class="footer__contacts contacts">
            <a class="call_phone" href="tel:+74712735400">+7 (4712) 73 54 00</a>
            <a class="sand_email" href="mailto:kursk@glavtk.ru">kursk@glavtk.ru</a>
            <a class="btn" href="#">Оставить заявку</a>
        </div>
    </div>
</footer>
