<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class item extends Component
{
    public $codigo;
    public $image;
    public $title;
    public $autores;
    public $acceso;
    public $resumen;
    public function __construct($codigo, $image,$title,$autores,$acceso,$resumen)
    {
        $this->codigo = $codigo;
        $this->image = $image;
        $this->title = $title;
        $this->autores = $autores;
        $this->acceso = $acceso;
        $this->resumen = $resumen;
    }

    
    public function render(): View|Closure|string
    {
        return view('components.item');
    }
}
