<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class Jabfung extends Model
{
    protected $table = 'jabfung';
    protected $primaryKey = 'id_jabfung';
    protected $fillable = ['id_jabfung', 'nm_jabfung'];
    public $timestamps = false;
}
