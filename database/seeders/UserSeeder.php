<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat user Super Admin
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'), // Gunakan hashing untuk password
            'role' => 'super_admin', // Role Super Admin
        ]);

        // Membuat user Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Gunakan hashing untuk password
            'role' => 'admin', // Role Admin
        ]);
    }
}
