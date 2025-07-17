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
    }
}
