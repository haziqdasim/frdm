<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            ['name' => 'JOHOR'],
            ['name' => 'KEDAH'],
            ['name' => 'KELANTAN'],
            ['name' => 'MELAKA'],
            ['name' => 'NEGERI SEMBILAN'],
            ['name' => 'PAHANG'],
            ['name' => 'PERAK'],
            ['name' => 'PERLIS'],
            ['name' => 'PULAU PINANG'],
            ['name' => 'SABAH'],
            ['name' => 'SARAWAK'],
            ['name' => 'SELANGOR'],
            ['name' => 'TERENGGANU'],
            ['name' => 'WP KUALA LUMPUR'],
            ['name' => 'WP LABUAN'],
            ['name' => 'WP PUTRAJAYA'],
        ];

        foreach ($states as $state) {
            State::create([
                'country_id' => 1,
                'name' => $state['name']
            ]);
        }
    }
}
