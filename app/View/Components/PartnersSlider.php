<?php

namespace App\View\Components;

use Closure;
use App\Models\Partner;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class PartnersSlider extends Component
{
    public $partners;

    public function __construct()
    {
        $this->partners = Cache::rememberForever('partners_in_main', function () {
            return Partner::orderBy('order')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partners-slider');
    }
}
