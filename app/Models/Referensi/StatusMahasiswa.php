<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class StatusMahasiswa extends Model
{
    protected $table = 'status_mahasiswa';
    protected $primaryKey = 'id_stat_mhs';

    protected $fillable = [
        'id_stat_mhs',
        'nm_stat_mhs',
        'ket_stat_mhs',
    ];

    public $timestamps = false;
}
