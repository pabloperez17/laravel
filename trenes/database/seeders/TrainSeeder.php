<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'Alvia',
                'passengers' => '160',
                'year' => '2000',
                'train_type_id' => 1

            ],
            [
                'name' => 'Renfe',
                'passengers' => '220',
                'year' => '2007',
                'train_type_id' => 2
            ]
        ]);
    }
}
