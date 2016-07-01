<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    protected $table = 'negara';
    protected $primaryKey = 'id_negara';

    protected $fillable = [
        'id_negara',
        'nm_negara',
        'a_ln',
    ];

    public $timestamps = false;
}
