@extends('layouts.all')

@section('main')
    <x-headers.header-page
        title="Услуги нашей компании"
        subtitle="Полный перечень услуг, предоставляемых нашей компанией"
    />

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Услуги нашей компании"></x-breadcrumbs.main>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="services-cards">
                @foreach ($services as $item)
                    <x-cards.service :item="$item"></x-cards.service>
                @endforeach
            </div>
        </div>
    </section>

@endsection
