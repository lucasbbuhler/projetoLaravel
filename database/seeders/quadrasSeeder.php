<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Quadra;

class quadrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quadras = 6;

        for($i = 0; $i < $quadras; $i++){
            $faker = Faker::create('pt_BR');
        }

        Quadra::create([
            'tipo_quadra' => $faker->Quadra,
            'valor_quadra' => $faker->Number,
        ]);
    }
}
