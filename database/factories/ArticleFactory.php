<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion'=>$this->faker->text(20),
            'marca'=>$this->faker->text(20),
            'modelo'=>$this->faker->text(20),
            'cantidad'=>$this->faker->text(20),
            'fechaCompra'=>$this->faker->text(20),
            'importe'=>$this->faker->text(20),

            'supplier_id'=>Supplier::all()->random()->id,
        ];
    }
}
