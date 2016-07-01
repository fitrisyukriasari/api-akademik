<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusan', function (Blueprint $table) {
            $table->integer('id_jur', false, true);
            $table->string('nm_jur', 60);
            $table->string('nm_intl_jur', 60);
            $table->boolean('u_sma');
            $table->boolean('u_smk');
            $table->boolean('u_pt');
            $table->boolean('u_slb');
            $table->integer('id_jenj_didik', false, true);
            $table->char('id_induk_jurusan', 10);
            $table->string('id_kel_bidang', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jurusan');
    }
}
