<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    protected $table = 'agama';
    protected $primaryKey = 'id_agama';
    protected $fillable = ['id_agama', 'nm_agama'];
    public $timestamps = false;
}
