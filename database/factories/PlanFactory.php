<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'plan_f_inicio_plan'=>$this->faker->text(20),
            'plan_f_fin_plan'=>$this->faker->text(20),
            'plan_horas_planificadas'=>$this->faker->text(20),
            'plan_semanas_planificadas'=>$this->faker->text(20),
            'plan_modalidad'=>$this->faker->text(20),
            'plan_turnos'=>$this->faker->text(20),

        ];
    }
}
