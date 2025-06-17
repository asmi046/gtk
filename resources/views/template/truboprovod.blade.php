@extends('layouts.all')

@section('main')
    <x-headers.header-page
        :title="$data->title"
        :subtitle="$data->sub_title"
    />

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$data->title"></x-breadcrumbs.main>
        </div>
    </section>

    <section>
        <div class="container text_styles">
            {!! $data->description !!}
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title clients__title">Преимущества трубопроводов нашего изготовления</h2>
            <div class="advantages-list">

                @foreach ( $sections['Преимущества трубопроводов нашего изготовления'] as $item)
                    <x-cards.text :item="$item"></x-cards.text>
                @endforeach

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title clients__title">Индивидуальный подход к каждому проекту</h2>
            <div class="icon-cards">
                @foreach ( $sections['Индивидуальный подход к каждому проекту'] as $item)
                    <x-cards.icon :item="$item"></x-cards.icon>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title clients__title">Примеры наших работ</h2>
            <div class="gallery-grid">

                @foreach ($data->images as $item)
                    <x-cards.galery :item="$item"></x-cards.galery>
                @endforeach

            </div>
        </div>
    </section>
@endsection
