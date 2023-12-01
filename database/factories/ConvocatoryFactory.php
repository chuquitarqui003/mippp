<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convocatory>
 */
class ConvocatoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'convocatoria_descripcion'=>$this->faker->text(20),
            'convocatoria_estado'=>$this->faker->text(20),
            'convocatoria_fecha_inicio'=>$this->faker->text(20),
            'convocatoria_fecha_fin'=>$this->faker->text(20),
            'convocatoria_cupo'=>$this->faker->text(20),
            'company_id'=>Company::all()->random()->id,
        ];
    }
}
