<?php

namespace Database\Factories;

use App\Models\Pagamento;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class PagamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_reserva' => function () {
                return \App\Models\Reserva::factory()->create()->id;
            },
            'metodo_de_pagamento' => $this->faker->randomElement(['Cartão de Crédito', 'Cartão de Débito', 'Pix', 'Dinheiro']),
            'data_de_pagamento' => Carbon::now(),
        ];
    }
}
