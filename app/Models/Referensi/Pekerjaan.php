<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table = 'pekerjaan';
    protected $primaryKey = 'id_pekerjaan';

    protected $fillable = [
        'id_pekerjaan',
        'nm_pekerjaan',
    ];

    public $timestamps = false;
}
