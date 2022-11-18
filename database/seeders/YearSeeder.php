<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'year'=>2021
            ],

            [
                'year'=>2022
            ],

            [
                'year'=>2023
            ],

            [
                'year'=>2024
            ],

            [
                'year'=>2025
            ],
        ])->each(function ($year){
            DB::table('years')->insert($year);
        });
    }
}
