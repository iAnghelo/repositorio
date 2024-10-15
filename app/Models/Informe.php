<?php

namespace App\Models;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'titulo',
        'resumen',
        'autores',
        'fecha_emision',
        'year_creacion',
        'estado',
        'ruta',
        'estado',
        'tipo_acceso',
        'tipo_informe',
    ];
    protected $table = 'informe';

    public function scopeFilter(Builder $query, Request $request)
    {
        if ($request->filled('search')) {
            $searchTerm = $request->input('search');
            $query->where(function($q) use ($searchTerm) {
                $q->where('titulo', 'like', "%$searchTerm%")
                  ->orWhere('resumen', 'like', "%$searchTerm%")
                  ->orWhere('autores', 'like', "%$searchTerm%");
            });
        }

        return $query;
    }
}
