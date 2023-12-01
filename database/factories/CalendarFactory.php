<?php

namespace Database\Factories;

use App\Models\Calendar;
use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calendar>
 */
class CalendarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'calendar_title'=>$this->faker->text(20),
            'calendar_fecha_inicio'=>$this->faker->text(20),
            'calendar_fecha_fin'=>$this->faker->text(20),

            'plan_id'=>Plan::all()->random()->id,
        ];
    }
}
