@php
    use Illuminate\Support\Arr;
@endphp
@props([
    'src' => 'img/logo-header.svg',
    'alt' => 'Логотип сайта Главтехконструкция',
    'title' => 'Логотип',
    'aria' => 'Перейти на главную',
    'width' => 320,
    'height' => 42,
    'aClass' => '',
    'imgClass' => '',
])

<a href="{{ route('index') }}" {{ $attributes->class(['logo', ...Arr::wrap($aClass)]) }} title="{{ $title }}"
    aria-label="{{ $aria }}">
    <img src="{{ asset($src) }}" {{ $attributes->class(['logo__image', ...Arr::wrap($imgClass)]) }}
        alt="{{ $alt }}" width="{{ $width }}" height="{{ $height }}">
</a>
