<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLembagaPengankat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembaga_pengangkat', function (Blueprint $table) {
            $table->integer('id_lemb_angkat', false, true);
            $table->string('nm_lemb_angkat', 80);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lembaga_pengangkat');
    }
}
