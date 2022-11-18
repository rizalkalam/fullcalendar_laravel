<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MonthSeeder extends Seeder
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
                'month'=>'January'
            ],

            [
                'month'=>'February'
            ],

            [
                'month'=>'March'
            ],

            [
                'month'=>'April'
            ],

            [
                'month'=>'May'
            ],

            [
                'month'=>'June'
            ],

            [
                'month'=>'July'
            ],

            [
                'month'=>'August'
            ],

            [
                'month'=>'September'
            ],

            [
                'month'=>'October'
            ],

            [
                'month'=>'November'
            ],

            [
                'month'=>'December'
            ],
        ])->each(function ($month){
            DB::table('months')->insert($month);
        });
    }
}
