<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'persona_nombre'=>$this->faker->text(20),
            'persona_ap_paterno'=>$this->faker->text(20),
            'persona_ap_materno'=>$this->faker->text(20),
            'persona_sexo'=>$this->faker->text(20),
            'persona_direccion'=>$this->faker->text(20),

        ];
    }
}
