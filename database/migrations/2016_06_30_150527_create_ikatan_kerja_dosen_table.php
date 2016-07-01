<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIkatanKerjaDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikatan_kerja_dosen', function (Blueprint $table) {
            $table->integer('id_ikatan_kerja', false, true);
            $table->string('nm_ikatan_kerja', 50);
            $table->string('ket_ikatan_kerja', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ikatan_kerja_dosen');
    }
}
