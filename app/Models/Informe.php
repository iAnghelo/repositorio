<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Informe extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo', 
        'nombre', 
        'resumen', 
        'autores', 
        'fecha_creacion', 
        'ano_creacion', 
        'ruta', 
        'estado', 
        'tipo_acceso', 
        'tipo_informe',
    ];
    protected $table = 'informe';

    

}
