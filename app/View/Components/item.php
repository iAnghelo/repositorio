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
    public $fecha;
    public $anio;
    public $tipo;
    public function __construct($codigo, $image,$title,$autores,$acceso,$resumen,$fecha,$anio,$tipo)
    {
        $this->codigo = $codigo;
        $this->image = $image;
        $this->title = $title;
        $this->autores = $autores;
        $this->acceso = $acceso;
        $this->resumen = $resumen;
        $this->fecha = $fecha;
        $this->anio = $anio;
        $this->tipo = $tipo;
    }

    
    public function render(): View|Closure|string
    {
        return view('components.item');
    }
}
