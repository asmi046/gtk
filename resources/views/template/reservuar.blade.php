@extends('layouts.all')

@section('main')
    <x-headers.header-page
        :title="$data->title"
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

    @isset ($sections['Преимущества наших резервуаров'])
        <section>
            <div class="container">
                <h2 class="section-title clients__title">Преимущества наших резервуаров</h2>
                <div class="advantages-list">

                    @foreach ( $sections['Преимущества наших резервуаров'] as $item)
                        <x-cards.text :item="$item"></x-cards.text>
                    @endforeach

                </div>
            </div>
        </section>
    @endisset



    @if ($data->images)
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
    @endif

@endsection
