<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;
    protected $table = 'registrasi';

    protected $fillable = [
        'pasien_id',
        'jadwaldokter_id',
        'wakturegistrasi',
        'waktukumjungan',
        'status'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function jadwaldokter()
    {
        return $this->belongsTo(Jadwaldokter::class);
    }

}
