<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Admin::factory(10)->create();

        \App\Models\Admin::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'status' => 1,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
