<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Cemento Portland',
                'type' => 'Material de construcción',
                'price' => 20.5,
                'description' => 'Bolsa de cemento Portland de 50 kg',
                'amount' => 100,
                'image' => 'cemento_portland.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ladrillos Cerámicos',
                'type' => 'Material de construcción',
                'price' => 2.5,
                'description' => 'Ladrillos cerámicos para construcción',
                'amount' => 1000,
                'image' => 'ladrillos_ceramicos.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Madera Tratada',
                'type' => 'Material de construcción',
                'price' => 35.75,
                'description' => 'Tablas de madera tratada para estructuras',
                'amount' => 200,
                'image' => 'madera_tratada.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Piedra Triturada',
                'type' => 'Material de construcción',
                'price' => 28.0,
                'description' => 'Piedra triturada para base de carreteras',
                'amount' => 800,
                'image' => 'piedra_triturada.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pintura Exterior',
                'type' => 'Acabados',
                'price' => 15.99,
                'description' => 'Pintura acrílica para exteriores',
                'amount' => 300,
                'image' => 'pintura_exterior.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}