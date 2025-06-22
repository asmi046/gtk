<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index() {
        $data = Vacancy::all();
        return view('vacancies', ['vacancy' => $data]);
    }
}
