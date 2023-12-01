<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estudiante_nombre'=>$this->faker->text(20),
            'estudiante_ap_materno'=>$this->faker->text(20),
            'estudiante_ap_paterno'=>$this->faker->text(20),
            'estudiante_codigo'=>$this->faker->text(20),
            'people_id'=>People::all()->random()->id,
        ];
    }
}
