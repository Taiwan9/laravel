<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Create 10 users for testing purposes
        // User::factory(10)->create();

        // Create the admin user
        User::firstOrCreate([
            'name' => 'taiwan',
            'email' => 'taiwan@teste.com',
            'password' => bcrypt('12345678')
        ]);

        // Create some users for testing
        User::firstOrCreate([
            'name' => 'caio',
            'email' => 'caio@teste.com',
            'password' => bcrypt('12345678')
        ]);
        User::firstOrCreate([
            'name' => 'joao',
            'email' => 'joao@teste.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
