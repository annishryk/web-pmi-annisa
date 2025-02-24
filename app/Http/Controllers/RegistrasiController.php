<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use App\Models\Jadwaldokter;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RegistrasiController extends Controller
{
    public function daftarKunjungan(Request $request)
    {
        $validasi = $request->validate([
            'pasien_id' => 'required|exists:pasien,id',
            'jadwaldokter_id' => 'required|exists:jadwaldokter,id',
            'waktukunjungan' => 'required|date'
        ]);

        $jadwalDokter = Jadwaldokter::findOrFail($validasi['jadwaldokter_id']);
        $waktuKunjungan = Carbon::parse($validasi['waktukunjungan']);

        if ($waktuKunjungan->diffInMinutes($jadwalDokter->jammulai) < 30) {
            return response()->json([
                'pesan' => 'Registrasi hasnya bisa dilakukan 30 menit sebelum jam praktek dimulai'
            ], 422);
        }

        $registrasi = Registrasi::create([
            'pasien_id' => $validasi['pasien_id'],
            'jadwaldokter_id' => $validasi['jadwaldokter_id'],
            'wakturegistrasi' => now(),
            'waktukunjungan' => $validasi['waktukunjungan'],
            'status' => 'pending'
        ]);

        return response()->json([
            'pesan' => 'Registrasi kunjungan berhasil',
            'registrasi' => $registrasi
        ]);


    }
}
