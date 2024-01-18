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
                'date' => now(),
                'price' => '40',
                'train_id' => 2,
                'ticket_types_id' => 1
            ],
            [
                'date' => now(),
                'price' => '65',
                'train_id' => 1,
                'ticket_types_id' => 2
            ]
        ]);
    }
}
