<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = [
            [
                'nisn'          => '12345',
                'nama'          => 'Rudianto',
                'kelas'         => '10.1',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'nisn'          => '67890',
                'nama'          => 'Anton Bengkel',
                'kelas'         => '10.3',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ];

        DB::table('siswa')->insert($siswa);
    }
}
