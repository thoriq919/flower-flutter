<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void 
    {

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'Pelanggan 1',
            'email' => 'pelanggan@gmail.com',
            'role' => 'pelanggan',
            'password' => 'pelanggan',
        ]);
    }
}
