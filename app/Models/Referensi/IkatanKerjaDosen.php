<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class IkatanKerjaDosen extends Model
{
    protected $table = 'ikatan_kerja_dosen';
    protected $primaryKey = 'id_ikatan_kerja';

    protected $fillable = [
        'id_ikatan_kerja',
        'nm_ikatan_kerja',
        'ket_ikatan_kerja',
    ];

    public $timestamps = false;
}
