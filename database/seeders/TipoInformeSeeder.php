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
            ['nombre' => 'Informe'],
            ['nombre' => 'Tesis'],
            ['nombre' => 'Proyecto'],
            ['nombre' => 'Programa de estudio'],
            ['nombre' => 'Investigacion'],
        ];

        foreach ($tipos as $tipo) {
            TipoInforme::create($tipo);
        }
    }
}
