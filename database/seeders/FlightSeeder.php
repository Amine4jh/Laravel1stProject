<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flights')->insert([
            'name' => 'Berlin 10PM',
            'active' => 1,
        ]);
        DB::table('flights')->insert([
            'name' => 'Madrid 1AM',
            'active' => 1,
        ]);
    }
}
