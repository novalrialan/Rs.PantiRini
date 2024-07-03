<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawais';
    // protected $primaryKey = 'id_pegawais';
    // protected $fillable = [
    //     'id_departemens',
    //     'nama',
    //     'alamat',
    //     'tanggal_lahir',
    //     'jenis_kelamin',
    //     'no_telpon',
    //     'email',
    //     'nip'
    // ];


    public function departemens()
    {
        return $this->belongsTo(Departemen::class, 'id_departemens', 'id_departemens');
    }
}
