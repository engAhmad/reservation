<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            "type" => "Sedan",
            "model" => "Bmw 530e",
            "year" => "2021",
            "color" => "red",
            "number_of_passengers" => 5,
            "price_per_day"=>40
        ]);
        
        DB::table('cars')->insert([
            "type" => "Sedan",
            "model" => "Mercedes e200",
            "year" => "2021",
            "color" => "black",
            "number_of_passengers" => 5,
            "price_per_day"=>60
        ]);

        DB::table('cars')->insert([
            "type" => "Sport",
            "model" => "Ford Mustang",
            "year" => "2017",
            "color" => "white",
            "number_of_passengers" => 2,
            "price_per_day"=>50
        ]);
    }
}
