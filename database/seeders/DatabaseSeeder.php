<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        
        User::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => "admin",
            'password' => Hash::make('admin1234') // Menggunakan Hash::make untuk hashing password
        ]);

             
        User::create([
            'nama' => 'airin',
            'email' => 'airin@gmail.com',
            'role' => "user",
            'password' => Hash::make('airin1234') // Menggunakan Hash::make untuk hashing password
        ]);
        
    }
}
