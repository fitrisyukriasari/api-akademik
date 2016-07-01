<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBentukPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bentuk_pendidikan', function (Blueprint $table) {
            $table->integer('id_bp', false, true);
            $table->string('nm_bp', 50);
            $table->boolean('a_jenj_paud');
            $table->boolean('a_jenj_tk');
            $table->boolean('a_jenj_sd');
            $table->boolean('a_jenj_smp');
            $table->boolean('a_jenj_sma');
            $table->boolean('a_jenj_tinggi');
            $table->string('dir_bina', 40);
            $table->boolean('a_aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bentuk_pendidikan');
    }
}
