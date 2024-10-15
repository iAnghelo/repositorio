<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformeController;
use App\Http\Controllers\InstitucionalController;
use App\Http\Controllers\InvestigacionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PublicacionesController;
use App\Http\Controllers\RepoController;
use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', HomeController::class)->name('home');
Route::get('/login', LoginController::class)->name('login.login');;

//Panel
Route::get('/home', [PanelController::class, 'home']);
Route::get('/perfil', [PanelController::class, 'perfil']);
Route::get('/manual', [PanelController::class, 'manual']);

//Publicaciones
Route::get('/informes/publications', [PublicacionesController::class, 'showPublications']);

//Informes
Route::get('/informes', [InformeController::class, 'showInformes']);
Route::get('/informes/add', [InformeController::class, 'add']);
Route::post('/informes', [InformeController::class, 'store']);
Route::put('/informes/{id}', [InformeController::class, 'update']);
Route::get('/informes/{id}', [InformeController::class, 'showByIdInformes']);
Route::delete('/informes/{id}', [InformeController::class, 'destroy']);



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
