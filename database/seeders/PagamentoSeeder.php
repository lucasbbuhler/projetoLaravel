<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pagamento;

class PagamentoSeeder extends Seeder
{
    public function run(): void
    { 
        \App\Models\Pagamento::factory(10)->create();
    }
}
