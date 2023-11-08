<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MalaysiaCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $malaysia_cities = collect(json_decode(File::get('database/json/malaysia_cities.json'), true));

        $malaysia_cities->each(function ($city){
            $country_slug = str_replace(' ', '-', strtolower($city['country']));
            $country_name = $city['country'];

            $country_query = Country::where('slug', $country_slug);

            // check country is existed
            if($country_query->exists()){
                $country = $country_query->first();
            }else{
                // create country
                $country = Country::create([
                    'slug' => $country_slug,
                    'name' => $country_name,
                ]);
            }

            $state_slug = str_replace(' ', '-', strtolower($city['admin_name']));
            $state_name = $city['admin_name'];

            // query state by slug
            $state_query = State::where('slug', $state_slug);

            // check state is existed
            if($state_query->exists()){
                $state = $state_query->first();
            }else{
                // create state
                $state = State::create([
                    'country_id' => $country->id,
                    'slug' => $state_slug,
                    'name' => $state_name,
                ]);
            }

            $city_slug = str_replace(' ', '-', strtolower($city['city']));
            $city_name = $city['city'];

            // query state by slug
            $city_query = City::where('slug', $city_slug);

            // check state is existed
            if($city_query->exists()){
                $city = $city_query->first();
            }else{
                // create state
                $city = City::create([
                    'state_id' => $state->id,
                    'slug' => $city_slug,
                    'name' => $city_name,
                ]);
            }
        });
    }
}
