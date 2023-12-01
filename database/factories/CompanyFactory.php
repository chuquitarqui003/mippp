<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'empresa_nombre'=>$this->faker->text(20),
            'empresa_ruc'=>$this->faker->text(20),
            'empresa_direccion'=>$this->faker->text(20),
            'empresa_telefono'=>$this->faker->text(20),
            'empresa_correo'=>$this->faker->text(20),

        ];
    }
}
