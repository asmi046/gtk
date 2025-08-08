<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;

use App\Models\Page\Page;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($slug) {

        $page = Page::where('slug', $slug)->first();

        if($page == null) abort('404');

        $template = $page->template?$page->template:'page.page';

        return view($template, ['page' => $page]);
    }
}
