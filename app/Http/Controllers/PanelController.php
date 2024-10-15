<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
   public function home()
   {
      return view('panel.home');
   }
   public function perfil()
   {
      return view('panel.perfil');
   }
   public function manual()
   {
      return view('panel.manual');
   }
}
