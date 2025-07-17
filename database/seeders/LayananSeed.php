<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Layanan::create(
            [
                'nama_layanan' => 'layanan1'
            ]
        );

        Layanan::create(
            [
                'nama_layanan' => 'layanan2'
            ]
        );

        Layanan::create(
            [
                'nama_layanan' => 'layanan3'
            ]
        );
    }
}
