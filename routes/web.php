<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstitucionalController;
use App\Http\Controllers\InvestigacionController;
use App\Http\Controllers\RepoController;
use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', HomeController::class)->name('home');

// Rutas para los repositorios
Route::resource('institucional', InstitucionalController::class)->names([
    'index' => 'institucional.index',
    'show' => 'institucional.show',  
]);

Route::resource('investigacion', InvestigacionController::class)->names([
    'index' => 'investigacion.index',
    'show' => 'investigacion.show',
]);


//Ruta para hacer pruebas
Route::get('/test', function () {
    return view('test');
});
