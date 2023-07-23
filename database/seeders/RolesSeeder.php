<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Role::create([
            'type' => 'admin',
        ]);

        Role::create([
            'type' => 'lead',
        ]);

        Role::create([
            'type' => 'user',
        ]);
    }
}

