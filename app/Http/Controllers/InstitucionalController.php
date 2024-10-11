<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InstitucionalController extends Controller
{

    public function index()
    {
        $informes = Informe::paginate(10);
        foreach ($informes as $informe) {
            if (!empty($informe->ruta) && !File::exists(public_path($informe->ruta))) {
                $informe->ruta = 'img/default2.png';
            }
        }
        return view('institucional.index',compact('informes'));
    }
    public function show($item){
        $informes = Informe::where('codigo',$item)->get();
        return view('institucional.show',compact('informes'));
    }
}
