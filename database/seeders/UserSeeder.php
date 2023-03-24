<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create(['name' => 'Saleem', 'email' => 'salee2m1@gmail.com', 'password' => bcrypt('saleem@123')]);
    }
}
