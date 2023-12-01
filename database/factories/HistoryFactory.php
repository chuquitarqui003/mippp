<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'claveMateria'=>$this->faker->text(20),
            'calificacion'=>$this->faker->text(20),
            'semes'=>$this->faker->text(20),

        ];
    }
}
