<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
class InstitucionalController extends Controller
{

    public function index(): Factory|View
    {
        $informes = Informe::where('tipo_informe', 'Informe')->paginate(10);
        $contador = Informe::where('tipo_informe', 'Informe')->count();
        foreach ($informes as $informe) {
            if (!empty($informe->ruta) && !File::exists(public_path($informe->ruta))) {
                $informe->ruta = 'img/default2.png';
            }
        }
        return view('institucional.index',compact('informes', 'contador'));
    }

    public function show($item): Factory|View{
        $informe = Informe::where('codigo', $item)->first();
        if (!empty($informe->ruta) && !File::exists(public_path($informe->ruta))) {
            $informe->ruta = 'img/default2.png';
        }
        return view('institucional.show', compact('informe'));
    }
}
