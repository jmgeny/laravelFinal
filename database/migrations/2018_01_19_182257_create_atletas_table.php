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
            $table->integer('asociacion_id');
            $table->integer('equipo_id');
            $table->integer('localidad_id');
            $table->integer('deporte_id');
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni');            
            $table->string('genero');
            $table->string('telefono');
            $table->string('direccion');
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
