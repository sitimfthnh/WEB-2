<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'pegawai_id',
        'ruang_id',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'keperluan',
    ];

    // Relasi ke Pegawai
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    // Relasi ke Ruang
    public function ruang()
    {
        return $this->belongsTo(Ruang::class);
    }
}
