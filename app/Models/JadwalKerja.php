<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class JadwalKerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pegawais',
        'hari',
        'jam_masuk',
        'jam_keluar',
    ];


    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawais', 'id_pegawais');
    }
}
