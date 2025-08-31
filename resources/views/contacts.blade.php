@extends('layouts.all')

@section('main')
    <x-headers.header-page
        title="Контакты"
        subtitle="Готовы ответить на все ваши вопросы, свяжитесь с нами удобным для Вас способом."/>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Контакты"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="contacts_page_section pt_0">
        <div class="container">
            <div class="colls">
                <div class="col">
                    <h2>Юридическая информация</h2>
                    <p class="label">Наименование:</p>
                    <p class="param">{{ $contacts['company_name']->value }}</p>

                    <p class="label">ИНН:</p>
                    <p class="param">{{ $contacts['inn']->value }}</p>

                    <p class="label">ОГРН:</p>
                    <p class="param">{{ $contacts['ogrn']->value }}</p>

                </div>

                <div class="col">
                    <h2>Контакты</h2>
                    <p class="param"><span class="label">тел.:</span> <a class="phone" href="tel:+7{{ phone_format( $contacts['phone']->value ) }}">{{ $contacts['phone']->value }}</a></p>
                    <p class="param"><span class="label">e-mail:</span> <a class="email" href="mailto:{{ $contacts['email']->value }}">{{ $contacts['email']->value }}</a></p>
                    <h2>Офис</h2>
                    <p class="param"><span class="label">Адрес:</span> {{ $contacts['adress']->value }}</p>
                    <p class="param"><span class="label">Режим работы:</span> {{ $contacts['work_time']->value }}</p>
                </div>
            </div>

            <h2>Как добраться</h2>
            <x-map-in-page :name="$contacts['company_name']->value" :geo="$contacts['geo']->value" :adres="$contacts['adress']" :phone="$contacts['phone']->value"></x-map-in-page>

        </div>
    </section>
@endsection
