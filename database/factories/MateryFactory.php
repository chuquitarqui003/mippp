<?php

namespace Database\Factories;

use App\Models\History;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matery>
 */
class MateryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->text(20),
            'creditos'=>$this->faker->text(20),
            'tipo'=>$this->faker->text(20),
            'etapa'=>$this->faker->text(20),
            'semestre'=>$this->faker->text(20),
            'history_id'=>History::all()->random()->id,
        ];
    }
}
