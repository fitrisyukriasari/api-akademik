<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenisEvaluasi extends Model
{
    protected $table = 'jenis_evaluasi';
    protected $primaryKey = 'id_jns_eval';

    protected $fillable = [
        'id_jns_eval',
        'nm_jns_eval',
        'ket_jns_eval'
    ];

    public $timestamps = false;
}
