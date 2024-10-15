<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class InstitucionalController extends Controller
{
    public function index(Request $request): Factory|View
    {
        $informes = Informe::filter($request)
        ->paginate(10);
        $contador = $informes->total();
        $this->actualizarRutas($informes);
        return view('institucional.index', compact('informes', 'contador'));
    }
    public function show($item): Factory|View
    {
        $informe = Informe::where('id', $item)->firstOrFail();
        $this->actualizarRuta($informe);
        return view('institucional.show', compact('informe'));
    }

    private function actualizarRutas($informes)
    {
        foreach ($informes as $informe) {
            $this->actualizarRuta($informe);
        }
    }
    private function actualizarRuta(Informe $informe)
    {
        if (!empty($informe->ruta) && !File::exists(public_path($informe->ruta))) {
            $informe->ruta = 'img/default2.png';
        }
    }
}
