<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenjangPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenjang_pendidikan', function (Blueprint $table) {
            $table->integer('id_jenj_didik', false, true);
            $table->string('nm_jenj_didik', 25);
            $table->boolean('u_jenj_lemb');
            $table->boolean('u_jenj_org');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jenjang_pendidikan');
    }
}
