<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use App\Models\MetalStructures;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class MetalInMain extends Component
{
    public $metalconstructs;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->metalconstructs = Cache::rememberForever('metal_in_main', function () {
            return MetalStructures::select()->orderBy('order', 'ASC')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.metal-in-main');
    }
}
