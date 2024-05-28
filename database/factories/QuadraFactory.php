<?php

namespace Database\Factories;

use App\Models\Quadra;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuadraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'valor_quadra' => $this->faker->numberBetween(100, 200),
            'tipo_quadra' => $this->faker->randomElement(['Futsal', 'Basquete', 'Futebol', 'Volei']),
        ];
    }
}
