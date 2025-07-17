<?php

namespace Database\Seeders;

use App\Models\Pengantri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengantriSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengantri::create(
            [
                'nama_pengantri' => 'pengantri1',
                'id_user' => 3,
            ]
        );

        Pengantri::create(
            [
                'nama_pengantri' => 'pengantri2',
                'id_user' => 4,
            ]
        );

        Pengantri::create(
            [
                'nama_pengantri' => 'pengantri3',
                'id_user' => 5,
            ]
        );
    }
}
