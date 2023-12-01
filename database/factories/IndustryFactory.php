<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Industry>
 */
class IndustryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'industria_nombre'=>$this->faker->text(20),
            'industria_ruc'=>$this->faker->text(20),
            'industria_direccion'=>$this->faker->text(20),
            'industria_telefono'=>$this->faker->text(20),
            'industria_correo'=>$this->faker->text(20),

        ];
    }
}
