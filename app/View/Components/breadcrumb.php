<?php

namespace App\View\Components;

use Closure;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class breadcrumb extends Component
{
    public $breadcrumbs;

    public function __construct($name = 'home')
    {
        $this->breadcrumbs = Breadcrumbs::generate($name);
    }

    public function render()
    {
        return view('components.breadcrumb');
    }
}
