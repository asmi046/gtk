<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function page($slug) {

        $data = Product::where('slug', $slug)->firstOrFail();

        $template = $data->template?$data->template:'default';

        $section_data =  collect( $data->sections)->groupBy('part')->toArray();

        return view($template, ['data' => $data, 'sections' => $section_data]);
    }
}
