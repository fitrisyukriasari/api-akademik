<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = 'semester';
    protected $primaryKey = 'id_smt';

    protected $fillable = [
        'id_smt',
        'id_thn_ajaran',
        'nm_smt',
        'smt',
        'a_periode_aktif',
        'is_active',
        'tgl_mulai',
        'tgl_selesai',
    ];

    public $timestamps = false;
}
