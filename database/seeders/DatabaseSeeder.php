<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'owner' => 'Company Owner',
            'role' => 'admin',
            'status' => 'aktif',
            'password' => Hash::make('admin123'),
        ]);

        // Create staff user
        User::create([
            'name' => 'Staff User',
            'email' => 'staff@gmail.com',
            'owner' => null,
            'role' => 'staff',
            'status' => 'aktif',
            'password' => Hash::make('staff123'),
        ]);

        // Create additional users using factory
        User::factory(8)->create();
    }
}
