@extends('layouts.all')

@section('main')
    <x-headers.header-page
        title="Продукция нашей компании"
        subtitle="Полный перечень продукции выпускаемой нашим предприятием"
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
                    <x-cards.product :item="$item"></x-cards.product>
                @endforeach
            </div>
        </div>
    </section>

@endsection
