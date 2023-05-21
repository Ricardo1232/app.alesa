<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomb_prod' => $this->faker->unique()->company(),
            'desc_prod' => $this->faker->sentence(5),
            'cant_prod' => $this->faker->numberBetween(1,500),
            'prec_prod' => $this->faker->randomFloat(2,1,1000)
        ];
    }
}
