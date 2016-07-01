<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class Penghasilan extends Model
{
    protected $table = 'penghasilan';
    protected $primaryKey = 'id_penghasilan';

    protected $fillable = [
        'id_penghasilan',
        'nm_penghasilan',
        'batas_bawah',
        'batas_atas',
    ];

    public $timestamps = false;
}
