<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwaldokter extends Model
{
    use HasFactory;
    protected $table = 'jadwaldokter';

    protected $fillable = [
        'dokter_id',
        'poliklinik_id',
        'jammulai',
        'jamselesai',
        'hari'
    ];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function poliklinik()
    {
        return $this->belongsTo(Poliklinik::class);
    }

    public function registrasi()
    {
        return $this->hasMany(Registrasi::class);
    }
}
