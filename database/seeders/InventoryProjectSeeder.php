<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoryProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inventory_projects')->insert([
            [
                'project_id' => 1,
                'inventory_id' => 2,
                'requested_quantity' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'project_id' => 1,
                'inventory_id' => 3,
                'requested_quantity' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'project_id' => 1,
                'inventory_id' => 1,
                'requested_quantity' => 34,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'project_id' => 1,
                'inventory_id' => 5,
                'requested_quantity' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'project_id' => 2,
                'inventory_id' => 1,
                'requested_quantity' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'project_id' => 2,
                'inventory_id' => 3,
                'requested_quantity' => 43,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'project_id' => 2,
                'inventory_id' => 1,
                'requested_quantity' => 76,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'project_id' => 3,
                'inventory_id' => 2,
                'requested_quantity' => 34,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
