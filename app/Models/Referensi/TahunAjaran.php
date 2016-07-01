<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    protected $table = 'tahun_ajaran';
    protected $primaryKey = 'id_thn_ajaran';

    protected $fillable = [
        'id_thn_ajaran',
        'nm_thn_ajaran',
        'a_periode_aktif',
        'tgl_mulai',
        'tgl_selesai',
    ];

    public $timestamps = false;
}
