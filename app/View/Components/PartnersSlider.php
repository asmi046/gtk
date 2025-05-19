<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Partner;

class PartnersSlider extends Component
{
    public $partners;

    public function __construct()
    {
        $this->partners = Partner::orderBy('sort_order')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partners-slider');
    }
}
