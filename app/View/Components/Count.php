<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class count extends Component
{
    /**
     * Create a new component instance.
     */
    public $contador;
    public function __construct($contador)
    {
        $this->contador = $contador;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contador');
    }
}
