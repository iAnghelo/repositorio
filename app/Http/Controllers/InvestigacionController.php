<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InvestigacionController extends Controller
{
    public function index()
    {
        $informes = Informe::paginate(10);
        foreach ($informes as $informe) {
            if (!empty($informe->ruta) && !File::exists(public_path($informe->ruta))) {
                $informe->ruta = 'img/default2.png';
            }
        }
        return view('investigacion.index',compact('informes'));
    }
}
