<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quadra;

class QuadraSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Quadra::factory(10)->create();
    }
}
