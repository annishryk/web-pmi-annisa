<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';

    protected $fillable = [
        'norekammedis',
        'nik',
        'namalengkap',
        'alamat',
        'jeniskelamin',
        'tanggallahir',
        'notelepon'
    ];

    public function registrasi()
    {
        return $this->hasMany(Registrasi::class);
    }
}
