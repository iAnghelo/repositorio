<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }
}
