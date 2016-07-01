<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisSertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_sert', function (Blueprint $table) {
            $table->integer('id_jns_sert', false, true);
            $table->integer('id_kk', false, true);
            $table->string('nm_jns_sert', 30);
            $table->boolean('u_prof_guru');
            $table->boolean('u_kepsek');
            $table->boolean('u_laboran');
            $table->boolean('u_prof_dosen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jenis_sert');
    }
}
