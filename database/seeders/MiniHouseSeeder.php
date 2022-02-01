<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class MiniHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mini_houses')->insert([
            "area" => 160,
            "number_of_rooms" => 4,
            "number_of_bath_rooms" => 3,
            "has_internet" => true,
            "has_parking" => true,
            "price_per_day"=>100
        ]);
        
        DB::table('mini_houses')->insert([
            "area" => 110,
            "number_of_rooms" => 2,
            "number_of_bath_rooms" => 1,
            "has_internet" => true,
            "has_parking" => false,
            "price_per_day"=>70
        ]);

        DB::table('mini_houses')->insert([
            "area" => 125,
            "number_of_rooms" => 3,
            "number_of_bath_rooms" => 2,
            "has_internet" => true,
            "has_parking" => true,
            "price_per_day"=>60
        ]);
    }
}
