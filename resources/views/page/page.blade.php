@extends('layouts.all')

@php
    $title = (empty($page->seo_title))?$page->title:$page->seo_title;
    $description = (empty($page->seo_description))?$page->title:$page->seo_description;;
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<x-headers.header-page
        :title="$page->title"
        subtitle="Готовы ответить на все ваши вопросы, свяжитесь с нами удобным для Вас способом."/>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$page->title"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="page_section text_styles pt_0">
        <div class="container">
            {!! $page->description !!}
        </div>
    </section>

@endsection

