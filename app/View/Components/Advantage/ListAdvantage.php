<?php

namespace App\View\Components\Advantage;

use App\Models\Advantage;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class ListAdvantage extends Component {

    public $advantages;

    public function __construct()
    {
        $this->advantages = Cache::rememberForever('advantages_in_main', function(){
            return Advantage::orderBy('order')->get();
        });
    }

    public function render(): Closure|View|string {
        return view('components.advantage.list-advantage');
    }
}
