<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PendaftaranPasienController extends Controller
{
    public function daftar(Request $request)
    {
        $validasi = $request->validate([
            'nik' => 'required|unique:pasien,nik',
            'namalengkap' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required|in:Pria,Wanita',
            'tanggallahir' => 'required|date',
            'notelepon' => 'required'
        ]);

        $validasi['norekammedis'] = $this->buatNomorRekamMedis();

        $pasien = Pasien::create($validasi);

        return response()->json([
            'pesan' => 'Pendaftaran pasien berhasil',
            'pasien' => $pasien
        ]);
    }

    private function buatNomorRekamMedis()
    {
        return 'RM-' . date('Y') . str_pad(Pasien::count() + 1, 6, '0', STR_PAD_LEFT);
    }


}
