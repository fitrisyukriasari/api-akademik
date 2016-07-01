<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenjangPendidikan extends Model
{
    protected $table = 'jenjang_pendidikan';
    protected $primaryKey = 'id_jenj_didik';

    protected $fillable = [
        'id_jenj_didik',
        'nm_jenj_didik',
        'u_jenj_lembaga',
        'u_jenj_org',
    ];

    public $timestamps = false;
}
