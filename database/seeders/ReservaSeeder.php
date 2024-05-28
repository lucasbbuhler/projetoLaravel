<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reserva;

class ReservaSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Reserva::factory(10)->create();
    }
}
