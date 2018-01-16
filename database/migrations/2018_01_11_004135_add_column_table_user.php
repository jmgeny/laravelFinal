<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('apellido');
            $table->string('cp');
            $table->string('direccion');
            $table->string('loc_id');
            $table->string('prov_id');
            $table->string('pais_id');
            $table->integer('dni')->unique();
            $table->string('sexo');
            $table->string('telefono');
            $table->string('apodo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
