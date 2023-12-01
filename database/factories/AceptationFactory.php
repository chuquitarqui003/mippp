<?php

namespace Database\Factories;

use App\Models\Participant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aceptation>
 */
class AceptationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'carta_aceptacion_estado'=>$this->faker->text(20),
            'carta_aceptacion_ruta'=>$this->faker->text(20),
            'carta_aceptacion_fecha_envio'=>$this->faker->text(20),
            'carta_aceptacion_hora_envio'=>$this->faker->text(20),


            'participant_id'=>Participant::all()->random()->id,
        ];
    }
}
