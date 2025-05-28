<?php

namespace App\View\Components;

use Closure;
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
        $this->points = Cache::rememberForever('contacts_banner', function () {
            return Contact::whereIn('name', ['phone', 'email'])->get()->keyBy('name');
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
