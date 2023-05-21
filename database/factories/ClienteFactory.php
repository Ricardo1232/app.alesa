<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomb_cli'   => $this->faker->unique()->name(3),
            'correo_cli' => $this->faker->unique()->email(),
            'dir_cli'    => $this->faker->unique()->address(),
            'tel_cli'    => $this->faker->unique()->phoneNumber() 
        ];
    }
}
