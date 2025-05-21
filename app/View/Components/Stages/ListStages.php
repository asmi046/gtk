<?php

namespace App\View\Components\Stages;

use App\Models\Stage;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class ListStages extends Component {

    public $stages;

    public function __construct()
    {
        $this->stages = Cache::rememberForever('stages_in_main', function(){
            return Stage::orderBy('order')->get();
        });
    }

    public function render(): Closure|View|string {
        return view('components.stages.list-stages');
    }
}
