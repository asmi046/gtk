@extends('layouts.all')

@section('title', 'Главная')
@section('description', 'Главтехконструкция официальный сайт')

@section('main')

    <div class="main__inner container">
        <div class="main__title">
            <h1>Производство<br>и поставка<br>Металлоконструкций</h1>
            <button type="button" class="btn main__title-btn">Скачать каталог</button>
        </div>
        <div class="main__content">
            <div class="main__content-item">
                <div class="main__content-item--number">
                    <span>25</span>
                </div>
                <div class="main__content-item--text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, repellat.
                </div>
            </div>
            <div class="main__content-item">
                <div class="main__content-item--number">
                    <span>43</span>
                </div>
                <div class="main__content-item--text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, repellat.
                </div>
            </div>
            <div class="main__content-item">
                <div class="main__content-item--number">
                    <span>115</span>
                </div>
                <div class="main__content-item--text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, repellat.
                </div>
            </div>
        </div>
    </div>

@endsection
