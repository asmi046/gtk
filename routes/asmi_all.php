<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\MetalStructuresController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\Page\PageController;

    Route::controller(IndexController::class)->group(function(){
        Route::get('/','index')->name('home');
        // Route::get('/company','company')->name('company');
        // Route::get('/products','products')->name('products');
        // Route::get('/services','services')->name('services');
        // Route::get('/news', 'news')->name('news');
        // Route::get('/vacancies','vacancies')->name('vacancies');
        // Route::get('/lab','lab')->name('lab');

    });

    Route::get('/metal-structures', [MetalStructuresController::class, "index"])->name('metal_structures');
    Route::get('/metal-structures/{slug}', [MetalStructuresController::class, "page"])->name('metal_structures_page');

    Route::get('/products', [ProductsController::class, "index"])->name('products');
    Route::get('/products/{slug}', [ProductsController::class, "page"])->name('product_page');

    Route::get('/services', [ServiceController::class, "index"])->name('services');

    Route::get('/contacts', [ContactsController::class, "index"])->name('contacts');
    Route::get('/page/{slug}', [PageController::class, "index"])->name('page');

    Route::get('/vacancies', [VacancyController::class, "index"])->name('vacancies');
