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

            <nav class="footer__menu">
                <h3>Металоконструкции</h3>
                <ul class="footer__menu-list">
                    <x-menues.puncts name="Меню в металоконструкции" />
                </ul>
            </nav>

            <nav class="footer__menu">
                <h3>Другая продукция</h3>
                <ul class="footer__menu-list">
                    <x-menues.puncts name="Другая продукция" />
                </ul>
            </nav>


        </div>
        <div class="footer__contacts contacts">
            <a class="call_phone" href="tel:+74712735400">+7 (4712) 73 54 00</a>
            <a class="sand_email" href="mailto:info@glavtk.ru">info@glavtk.ru</a>
            <a class="btn" href="#consult">Оставить заявку</a>
        </div>
    </div>
    <div class="footer__policy container">
        <a href="/page/politika-v-oblasti-obrabotki-personalnyx-dannyx">Политика в области обработки персональных данных</a>
        <a href="/page/soglasie-na-obrabotku-personalnyx-dannyx">Согласие на обработку персональных данных</a>
    </div>
</footer>
