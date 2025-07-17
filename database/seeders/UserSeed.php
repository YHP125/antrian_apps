<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'AdminUser',
            'email' => 'admin@example.com',
            'password' => 'admin123',
            'id_role' => 1,
        ]);

        User::create([
            'username' => 'RegularUser',
            'email' => 'user@example.com',
            'password' => 'user123',
            'id_role' => 2,
        ]);

        User::create([
            'username' => 'pengantri1',
            'email' => 'pengantri1@example.com',
            'password' => 'pengantri1',
            'id_role' => 4,
        ]);

        User::create([
            'username' => 'pengantri2',
            'email' => 'pengantri2@example.com',
            'password' => 'pengantri2',
            'id_role' => 4,
        ]);

        User::create([
            'username' => 'pengantri3',
            'email' => 'pengantri3@example.com',
            'password' => 'pengantri3',
            'id_role' => 4,
        ]);
    }
}
