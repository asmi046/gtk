<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('index');
    }

    public function company(){
        return view('about.index');
    }

    public function products(){
        return 'Продукция';
    }

    public function services(){
        return 'Услуги';
    }

    public function news(){
        return 'Новости';
    }

    public function vacancies(){
        return 'Вакансии';
    }
}
