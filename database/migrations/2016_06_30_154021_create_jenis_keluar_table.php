<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_keluar', function (Blueprint $table) {
            $table->integer('id_jns_keluar', false, true);
            $table->string('ket_keluar', 40);
            $table->boolean('a_pd');
            $table->boolean('a_ptk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jenis_keluar');
    }
}
