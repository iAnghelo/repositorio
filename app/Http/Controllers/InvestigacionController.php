<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class InvestigacionController extends Controller
{
    public function index(Request $request): Factory|View
    {
        $informes = Informe::where('tipo_informe', 'Investigación')->
        filter($request)
        ->paginate(10);
        $contador = $informes->total();
        foreach ($informes as $informe) {
            if (!empty($informe->ruta) && !File::exists(public_path($informe->ruta))) {
                $informe->ruta = 'img/default2.png';
            }
        }
        return view('investigacion.index',compact('informes', 'contador'));
    }
    public function show($item): Factory|View
    {
        $informe = Informe::where('id', $item)->firstOrFail();
        $this->actualizarRuta($informe);
        return view('investigacion.show', compact('informe'));
    }
    private function actualizarRuta(Informe $informe)
    {
        if (!empty($informe->ruta) && !File::exists(public_path($informe->ruta))) {
            $informe->ruta = 'img/default2.png';
        }
    }
}
