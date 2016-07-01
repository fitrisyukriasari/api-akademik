<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class LembagaPengangkat extends Model
{
    protected $table = 'lembaga_pengangkat';
    protected $primaryKey = 'id_lemb_angkat';

    protected $fillable = [
        'id_lemb_angkat',
        'nm_lemb_angkat',
    ];

    public $timestamps = false;
}
