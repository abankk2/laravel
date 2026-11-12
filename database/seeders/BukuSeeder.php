<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku = [
            [
                'judul'         => 'Pemograman Java',
                'pengarang'     => 'Anton Bengkel',
                'tahun_terbit'  => 2020,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'judul'         => 'Buku Pemograman PHP',
                'pengarang'     => 'Rudianto',
                'tahun_terbit'  => 2021,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ];

        DB::table('buku')->insert($buku);
    }
}
