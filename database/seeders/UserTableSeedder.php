<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UserTableSeedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = 30;

        for($i = 0; $i < users; $i++){
            $faker = Faker::create('pt_BR');
        }

        User::create([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => bcrypt('password')
        ]);

    }
}
