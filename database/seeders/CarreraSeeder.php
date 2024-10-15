<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carreras = [
            ['nombre' => 'Contabilidad', 'ruta_logo' => 'path/to/logo1.png'],
            ['nombre' => 'Desarrollo de Sistemas de Informacion', 'ruta_logo' => 'path/to/logo2.png'],
            ['nombre' => 'Quimica', 'ruta_logo' => 'path/to/logo3.png'],
            ['nombre' => 'Enfermeria Tecnica', 'ruta_logo' => 'path/to/logo4.png'],
            ['nombre' => 'Electricidad Industrial', 'ruta_logo' => 'path/to/logo5.png'],
            ['nombre' => 'Electronica Industrial', 'ruta_logo' => 'path/to/logo6.png'],
            ['nombre' => 'Mecatronica Automotriz', 'ruta_logo' => 'path/to/logo7.png'],
            ['nombre' => 'Mecanica de Produccion Industrial', 'ruta_logo' => 'path/to/logo8.png'],
        ];

        foreach ($carreras as $carrera) {
            Carrera::create($carrera);
        }
    }
}
