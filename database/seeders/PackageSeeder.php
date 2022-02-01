<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            "name" => "two days",
            "number_of_days" => 2,
        ]);
        
        DB::table('packages')->insert([
            "name" => "one week",
            "number_of_days" => 7,
        ]);
        
        DB::table('packages')->insert([
            "name" => "one month",
            "number_of_days" => 30,
        ]);
    }
}
