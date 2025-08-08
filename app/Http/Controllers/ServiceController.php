<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $data = Service::all();
        return view('services', ['services' => $data]);
    }
}
