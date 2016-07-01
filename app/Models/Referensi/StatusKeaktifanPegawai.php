<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class StatusKeaktifanPegawai extends Model
{
    protected $table = 'status_keaktifan_pegawai';
    protected $primaryKey = 'id_stat_aktif';

    protected $fillable = [
        'id_stat_aktif',
        'nm_stat_aktif',
    ];

    public $timestamps = false;
}
