@extends('layouts.all')

@section('title', 'Главная')
@section('description', 'Главтехконструкция официальный сайт')

@section('main')
    <x-headers.header/>
    <x-advantage></x-advantage>
    <x-stages-section></x-stages-section>

    <x-metal-in-main></x-metal-in-main>

    <x-work-geo />

    <x-join-team-section></x-join-team-section>

    <x-partners-slider></x-partners-slider>
@endsection
