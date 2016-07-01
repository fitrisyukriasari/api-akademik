<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class PangkatGolongan extends Model
{
    protected $table = 'pangkat_golongan';
    protected $primaryKey = 'id_pangkat_gol';

    protected $fillable = [
        'id_pangkat_gol',
        'kode_gol',
        'nm_pangkat',
    ];

    public $timestamps = false;
}
