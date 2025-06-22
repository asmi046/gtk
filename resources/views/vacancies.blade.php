@extends('layouts.all')

@section('main')
    <x-headers.header-page
        title="Вакансии"
        subtitle="Все актуальные вакансии нашей компании"
    />

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Вакансии"></x-breadcrumbs.main>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="vacancy-list">
                @foreach ($vacancy as $item)
                    <x-cards.vacancy :item="$item"></x-cards.vacancy>
                @endforeach
            </div>
        </div>
    </section>


@endsection
