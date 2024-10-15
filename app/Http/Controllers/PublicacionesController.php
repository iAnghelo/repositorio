<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informe;

class PublicacionesController extends Controller
{
   public function indexPublications()
   {
      return view('panel.publications');
   }

   public function showPublications()
   {
      $publicaciones = Informe::orderBy('id', 'asc')->paginate(10);
      return view('panel.publications', compact('publicaciones'));
   }
}
