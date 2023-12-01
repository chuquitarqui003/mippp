<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Presentation>
 */
class PresentationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'carta_presentacion_estado'=>$this->faker->text(20),
            'carta_presentacion_ruta'=>$this->faker->text(20),
            'carta_presentacion_fecha_solicitud'=>$this->faker->text(20),
            'carta_presentacion_fecha_recibida'=>$this->faker->text(20),

            'student_id'=>Student::all()->random()->id,

        ];
    }
}
