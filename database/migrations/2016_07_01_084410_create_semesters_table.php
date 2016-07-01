<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester', function (Blueprint $table) {
            $table->integer('id_smt', false, true);
            $table->integer('id_thn_ajaran', false, true);
            $table->string('nm_smt', 20);
            $table->unsignedTinyInteger('smt');
            $table->boolean('a_periode_aktif');
            $table->boolean('is_active');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('semester');
    }
}
