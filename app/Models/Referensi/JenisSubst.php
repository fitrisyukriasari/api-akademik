<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenisSubst extends Model
{
    protected $table = 'jenis_subst';
    protected $primaryKey = 'id_jns_subst';

    protected $fillable = [
        'id_jns_subst', 'nm_jns_subst'
    ];

    public $timestamps = false;
}
