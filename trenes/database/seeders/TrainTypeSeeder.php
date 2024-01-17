<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table('trains_type')->insert([
            [
                'type' => 'Cercanias'
            ],
            [
                'type' => 'Media Distancia'
            ],
            [
                'type' => 'Alta Velocidad'
            ]
        ]); 
    }
}
