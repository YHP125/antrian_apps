<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('role')->insert([
            ['nama_role' => 'admin'],
            ['nama_role' => 'user'],
            ['nama_role' => 'guest'],
        ]);
    }
}
