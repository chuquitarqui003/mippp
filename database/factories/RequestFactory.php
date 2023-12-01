<?php

namespace Database\Factories;

use App\Models\Participant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Request>
 */
class RequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'req_nombre'=>$this->faker->text(20),
            'req_tipo_documento'=>$this->faker->text(20),
            'req_ruta'=>$this->faker->text(20),
            'req_estado'=>$this->faker->text(20),

            'participant_id'=>Participant::all()->random()->id,
        ];
    }
}
