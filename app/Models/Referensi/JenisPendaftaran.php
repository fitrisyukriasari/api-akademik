<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenisPendaftaran extends Model
{
    protected $table = 'jenis_pendaftaran';
    protected $primaryKey = 'id_jns_daftar';

    protected $fillable = [
        'id_jns_daftar',
        'nm_jns_daftar',
        'u_daftar_sekolah',
        'u_daftar_rombel'
    ];
    
    public $timestamps = false;
}
