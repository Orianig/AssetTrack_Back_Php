<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products_providers')->insert([
            [
                'product_id' => '1',
                'provider_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => '1',
                'provider_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => '2',
                'provider_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => '1',
                'provider_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => '2',
                'provider_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => '5',
                'provider_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => '4',
                'provider_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => '3',
                'provider_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
