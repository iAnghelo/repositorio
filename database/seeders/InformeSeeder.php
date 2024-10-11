<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Models\Informe;

class InformeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $informes = [];
        for ($i = 1; $i <= 50; $i++) {
            $informes[] = [
                'codigo' => str_pad($i, 5, '0', STR_PAD_LEFT),
                'nombre' => $faker->sentence(3),
                'resumen' => $faker->paragraph(),
                'autores' => $faker->name() . '-' . $faker->name(), 
                'fecha_creacion' => Carbon::today()->subDays($i)->format('Y-m-d'),
                'ano_creacion' => Carbon::now()->format('Y'),
                'ruta' => 'img/img' . $i . '.png',
                'estado' => $faker->randomElement(['Publicado', 'No Publicado']),
                'tipo_acceso' => $faker->randomElement(['Publico', 'Privado']),
                'tipo_informe' => $faker->randomElement(['Informe', 'Tesis', 'Proyecto', 'Programa de estudio']),
            ];
        }

        Informe::insert($informes);
    }
}
