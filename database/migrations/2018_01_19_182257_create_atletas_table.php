<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atletas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('apellido');
            $table->string('apodo');
            $table->string('telefono');
            $table->string('sexo');
            $table->string('dni');
            $table->integer('pais_id');
            $table->integer('prov_id');
            $table->integer('loc_id');
            $table->string('direccion');
            $table->string('cp');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atletas');
    }
}
