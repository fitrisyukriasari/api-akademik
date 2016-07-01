<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisPendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_pendaftaran', function (Blueprint $table) {
            $table->integer('id_jns_daftar', false, true);
            $table->string('nm_jns_daftar', 20);
            $table->boolean('u_daftar_sekolah');
            $table->boolean('u_daftar_rombel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jenis_pendaftaran');
    }
}
