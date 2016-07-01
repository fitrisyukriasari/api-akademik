<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table = 'wilayah';
    protected $primaryKey = 'id_wilayah';

    protected $fillable = [
        'id_wil',
        'nm_wil',
        'asal_wil',
        'kode_bps',
        'kode_dagri',
        'kode_keu',
        'id_induk_wilayah',
        'id_level_wil',
        'id_negara',
    ];

    public $timestamps = false;
}
