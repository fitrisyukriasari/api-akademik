<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenisSert extends Model
{
    protected $table = 'jenis_sert';
    protected $primaryKey = 'id_jns_sert';

    protected $fillable = [
        'id_jns_sert',
        'id_kk',
        'nm_jns_sert',
        'u_prof_guru',
        'u_kepsek',
        'u_laboran',
        'u_prof_dosen',
    ];

    public $timestamps = false;
}
