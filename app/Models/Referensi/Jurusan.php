<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'id_jur';

    protected $fillable = [
        'id_jur',
        'nm_jur',
        'nm_intl_jur',
        'u_sma',
        'u_smk',
        'u_pt',
        'u_slb',
        'id_jenj_didik',
        'id_induk_jurusan',
        'id_kel_bidang',
    ];

    public $timestamps = false;
}
