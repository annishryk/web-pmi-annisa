<?php

namespace Database\Seeders;

use App\Models\Poliklinik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoliklinikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $polikliniks = [
            [
                'namapoli' => 'Jantung',
                'keterangan' => 'Ini adalah Poli Jantung'
            ],
            [
                'namapoli' => 'Penyakit Dalam',
                'keterangan' => 'Ini adalah poli Penyakit Dalam'
            ],
        ];

        foreach ($polikliniks as $poliklikik) {
            Poliklinik::create($poliklikik);
        }
    }
}
