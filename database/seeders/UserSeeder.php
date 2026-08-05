<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'fauzan',
            'email' => 'fauzan2@gmail.com',
            'role_id' => 2,
        ]);
         User::factory()->create([
            'name' => 'fauzan',
            'email' => 'fauzan1@gmail.com',
            'role_id' => 1,
        ]);

        User::factory()->count(3)->create([
            'role_id' => 2,
        ]);
        
    }
}
