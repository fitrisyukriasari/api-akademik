<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class StatusKepegawaian extends Model
{
    protected $table = 'status_kepegawaian';
    protected $primaryKey = 'id_stat_pegawai';

    protected $fillable = [
        'id_stat_pegawai',
        'nm_stat_pegawai',
    ];

    public $timestamps = false;
}
