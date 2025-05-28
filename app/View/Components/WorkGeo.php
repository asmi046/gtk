<?php

namespace App\View\Components;

use Closure;
use App\Models\Geograpy;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class WorkGeo extends Component
{
    public $points;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->points = Cache::rememberForever('geo_in_map', function () {
            return Geograpy::all();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.work-geo');
    }
}
