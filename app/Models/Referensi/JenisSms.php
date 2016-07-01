<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenisSms extends Model
{
    protected $table = 'jenis_sms';
    protected $primaryKey = 'id_jns_sms';
    protected $fillable = ['id_jns_sms', 'nm_jns_sms'];
    public $timestamps = false;
}
