<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BebidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table('bebidas')->insert([
            [
                'bebida' => 'Coca cola',
                'precio' => 2.5,
                'cantidad' => '33cl'
            ],
            [
                'bebida' => 'Agua',
                'precio' => 2,
                'cantidad' => '50cl'
            ],
            [
                'bebida' => 'Cerveza',
                'precio' => 3,
                'cantidad' => '33cl'
            ]
        ]);
    }
}
