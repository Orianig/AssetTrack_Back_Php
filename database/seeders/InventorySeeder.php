<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inventories')->insert([
            [
                'product_id' => 1,
                'availability' => 20,
                'prev_amount' => 50,
                'new_amount' => 30,
                'quantity' => 20,
                'entry_date' => now(),
                'departure_date' => now()
            ],
            [
                'product_id' => 2,
                'availability' => 100,
                'prev_amount' => 200,
                'new_amount' => 150,
                'quantity' => 50,
                'entry_date' => now(),
                'departure_date' => now()
            ],
            [
                'product_id' => 3,
                'availability' => 50,
                'prev_amount' => 100,
                'new_amount' => 70,
                'quantity' => 30,
                'entry_date' => now(),
                'departure_date' => now()
            ],
            [
                'product_id' => 4,
                'availability' => 800,
                'prev_amount' => 1000,
                'new_amount' => 900,
                'quantity' => 100,
                'entry_date' => now(),
                'departure_date' => now()
            ],
            [
                'product_id' => 5,
                'availability' => 300,
                'prev_amount' => 500,
                'new_amount' => 350,
                'quantity' => 50,
                'entry_date' => now(),
                'departure_date' => now()
            ],
            [
                'product_id' => 6,
                'availability' => 200,
                'prev_amount' => 300,
                'new_amount' => 220,
                'quantity' => 80,
                'entry_date' => now(),
                'departure_date' => now()
            ],
        ]);
    }
}
