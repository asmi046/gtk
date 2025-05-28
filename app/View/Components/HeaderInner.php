<?php

namespace App\View\Components;

use Closure;
use App\Models\Contact;
use App\Models\Parametr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class HeaderInner extends Component
{
    public $contacts;
    public $cerecter;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->contacts = Cache::rememberForever('contacts_banner', function () {
            return Contact::whereIn('name', ['phone', 'email'])->get()->keyBy('name');
        });

        $this->cerecter = Cache::rememberForever('cerecter_banner', function () {
            return Parametr::whereIn('str_id', ['banner_h1', 'banner_value_1', 'banner_value_2', 'banner_value_3'])->get()->keyBy('str_id');
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-inner');
    }
}
