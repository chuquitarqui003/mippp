<?php

namespace Database\Factories;

use App\Models\Convocatory;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'participante_estado'=>$this->faker->text(20),
            'student_id'=>Student::all()->random()->id,
            'convocatory_id'=>Convocatory::all()->random()->id,

        ];
    }
}
