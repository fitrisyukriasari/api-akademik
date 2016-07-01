<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWilayahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilayah', function (Blueprint $table) {
            $table->integer('id_wil', false, true);
            $table->string('nm_wil', 40);
            $table->string('asal_wil', 8);
            $table->string('kode_bps', 7);
            $table->string('kode_dagri', 7);
            $table->string('kode_keu', 10);
            $table->string('id_induk_wilayah', 8);
            $table->unsignedTinyInteger('id_level_wil');
            $table->char('id_negara', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wilayah');
    }
}
