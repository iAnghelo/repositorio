<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public $parametro; 
    public $codigo;
    public $image;
    public $title;
    public $autores;
    public $acceso;
    public $resumen;
    public function __construct($codigo, $parametro = 'institucional', $image, $title, $autores, $acceso, $resumen)
    {
        $this->parametro = $parametro;
        $this->codigo = $codigo;
        $this->image = $image;
        $this->title = $title;
        $this->autores = $autores;
        $this->acceso = $acceso;
        $this->resumen = $resumen;
    }


    public function getIcon()
    {
        return match ($this->acceso) {
            'Publico' => 'lock-open-alt',
            'Privado' => 'lock-alt',
            default => 'help-circle',
        };
    }
    public function getColor(){
        return match ($this->acceso) {
            'Publico' => 'green',
            'Privado' => 'red',
            default => 'gray',
        };
    }
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
