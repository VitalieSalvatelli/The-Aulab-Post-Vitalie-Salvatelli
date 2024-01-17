<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class revisor_request_table extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $revisorRequest)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.revisor_request_table');
    }
}
