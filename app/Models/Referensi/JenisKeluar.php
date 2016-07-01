<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenisKeluar extends Model
{
    protected $table = 'jenis_keluar';
    protected $primaryKey = 'id_jns_keluar';

    protected $fillable = [
        'id_jns_keluar',
        'ket_keluar',
        'a_pd',
        'a_ptk'
    ];

    public $timestamps = false;
}
