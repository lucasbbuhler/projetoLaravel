<?php

namespace Database\Factories;

use App\Models\Reserva;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Quadra;
use Carbon\Carbon;

class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $quadra = Quadra::inRandomOrder()->first();

        $valor_da_reserva = $quadra->valor_quadra;

        return [
            'id_quadra' => $quadra->id,
            'responsavel' => $this->faker->name,
            'data_da_reserva' => Carbon::now()->addDays($this->faker->numberBetween(1, 30)),
            'valor_da_reserva' => $valor_da_reserva,
        ];
    }
}
