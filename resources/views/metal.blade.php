@extends('layouts.all')

@section('main')
    <x-headers.header-page
        title="Производство металлоконструкций"
        subtitle="Производим высококачественные металлоконструкции для всех сфер производства"
    />

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Продукция нашей компании"></x-breadcrumbs.main>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="product-cards">
                @foreach ($products as $item)
                    <x-cards.metal :item="$item"></x-cards.metal>
                @endforeach
            </div>
        </div>
    </section>

@endsection
