<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetalStructures;

class MetalStructuresController extends Controller
{
    public function index() {
        $data = MetalStructures::all();
        return view('metal', ['products' => $data]);
    }

    public function page($slug) {

        $data = MetalStructures::where('slug', $slug)->firstOrFail();

        $template = $data->template?$data->template:'default';

        $section_data =  collect( $data->sections)->groupBy('part')->toArray();

        return view($template, ['data' => $data, 'sections' => $section_data]);
    }
}
