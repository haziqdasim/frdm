<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $demoUser = User::create([
            'name'              => $faker->name,
            'email'             => 'superadmin@cara.com',
            'password'          => Hash::make('demo'),
            'email_verified_at' => now(),
            'status_id'         => 1
        ]);

        $demoUser2 = User::create([
            'name'              => $faker->name,
            'email'             => 'admin@gmail.com',
            'password'          => Hash::make('demo'),
            'email_verified_at' => now(),
            'status_id'         => 1

        ]);

        $demoUser3 = User::create([
            'name'              => $faker->name,
            'email'             => 'bomba@gmail.com',
            'password'          => Hash::make('demo'),
            'email_verified_at' => now(),
            'status_id'         => 1

        ]);
    }
}
