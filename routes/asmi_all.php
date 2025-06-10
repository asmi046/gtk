<?php

use App\Http\Controllers\ContactsController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\Page\PageController;

    Route::controller(IndexController::class)->group(function(){
        Route::get('/','index')->name('home');
        Route::get('/company','company')->name('company');
        Route::get('/products','products')->name('products');
        Route::get('/services','services')->name('services');
        Route::get('/news', 'news')->name('news');
        Route::get('/vacancies','vacancies')->name('vacancies');
        Route::get('/lab','lab')->name('lab');

    });

    Route::get('/contacts', [ContactsController::class, "index"])->name('contacts');
    Route::get('/page/{slug}', [PageController::class, "index"])->name('page');
