@extends('layouts.all')

@section('main')
    <x-headers.header-page
        :title="$data->title"
        subtitle=""
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
            <h2 class="section-title clients__title">Наши ключевые преимущества</h2>
            <div class="advantages-list">

                @foreach ( $sections['Наши ключевые преимущества'] as $item)
                    <x-cards.text :item="$item"></x-cards.text>
                @endforeach

            </div>
        </div>
    </section>

    @if ($data->images)
        <section>
            <div class="container">
                <h2 class="section-title clients__title">Примеры наших работ</h2>
                <div class="gallery-grid">

                    @foreach ($data->images as $item)
                        <x-cards.galery :showtitle="false" :item="$item"></x-cards.galery>
                    @endforeach

                </div>
            </div>
        </section>
    @endif
@endsection
