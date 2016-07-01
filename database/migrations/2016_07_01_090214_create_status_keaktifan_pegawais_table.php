<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusKeaktifanPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_keaktifan_pegawai', function (Blueprint $table) {
            $table->integer('id_stat_aktif', false, true);
            $table->string('nm_stat_aktif', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('status_keaktifan_pegawai');
    }
}
