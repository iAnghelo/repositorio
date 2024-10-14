<?php

namespace Database\Seeders;

use App\Models\TipoInforme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoInformeSeeder extends Seeder
{
    
    public function run(): void
    {
        $tipos = [
            ['tipo' => 'Informe'],
            ['tipo' => 'Tesis'],
            ['tipo' => 'Proyecto'],
            ['tipo' => 'Programa de estudio'],
            ['tipo' => 'Investigacion'],
        ];

        foreach ($tipos as $tipo) {
            TipoInforme::create($tipo);
        }
    }
}
