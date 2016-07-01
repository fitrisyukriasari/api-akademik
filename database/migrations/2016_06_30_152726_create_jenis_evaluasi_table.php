<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisEvaluasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_evaluasi', function (Blueprint $table) {
            $table->integer('id_jns_eval', false, true);
            $table->string('nm_jns_eval', 25);
            $table->string('ket_jns_eval', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jenis_evaluasi');
    }
}
