<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class LevelWilayah extends Model
{
    protected $table = 'level_wilayah';
    protected $primaryKey = 'id_level_wil';

    protected $fillable = [
        'id_level_wil',
        'nm_level_wilayah'
    ];

    public $timestamps = false;
}
