<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dokters = [
            [
                'namadokter' => 'Dokter Jantung',
                'spesialisasi' => 'Ini adalah Dokter Jantung'
            ],
            [
                'namadokter' => 'Penyakit Dalam',
                'spesialisasi' => 'Ini adalah Dokter Penyakit Dalam'
            ],
        ];

        foreach ($dokters as $dokter) {
            Dokter::create($dokter);
        }
    }
}
