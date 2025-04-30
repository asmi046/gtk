<?php
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

    Route::controller(IndexController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/company','company')->name('company');
        Route::get('/products','products')->name('products');
        Route::get('/services','services')->name('services');
        Route::get('/news', 'news')->name('news');
        Route::get('/vacancies','vacancies')->name('vacancies');
        Route::get('/contacts','contacts')->name('contacts');
    });
