<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'date' => '17/01/2024',
                'price' => '40',
                'train_id' => '04',
                'ticket_types_id' => 1
            ],
            [
                'date' => '19/01/2024',
                'price' => '65',
                'train_id' => '02',
                'ticket_types_id' => 2
            ]
        ]);
    }
}
