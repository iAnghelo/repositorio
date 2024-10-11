<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Informe;
class InformeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Informe::class;

    public function definition()
    {
        $i = $this->faker->unique()->numberBetween(1, 50);
        return [
            'codigo' => str_pad($i, 5, '0', STR_PAD_LEFT),
            'nombre' => $this->faker->sentence(3),
            'resumen' => $this->faker->paragraph(),
            'autores' => $this->faker->name() . '-' . $this->faker->name(),
            'fecha_creacion' => Carbon::today()->subDays($i)->format('Y-m-d'),
            'ano_creacion' => Carbon::now()->format('Y'),
            'ruta' => "img/img$i.png",
            'estado' => $this->faker->randomElement(['Publicado', 'No Publicado']),
            'tipo_acceso' => $this->faker->randomElement(['Publico', 'Privado']),
            'tipo_informe' => $this->faker->randomElement(['Informe', 'Tesis', 'Proyecto', 'Programa de estudio','Investigacion','Practicas']),
        ];
    }
}
