<?php

namespace Database\Factories;

use App\Models\Participant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *P
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'convenio_estado'=>$this->faker->text(20),
            'convenio_ruta'=>$this->faker->text(20),
            'convenio_fecha_envio'=>$this->faker->text(20),
            'convenio_hora_envio'=>$this->faker->text(20),

            'participant_id'=>Participant::all()->random()->id,
        ];
    }
}
