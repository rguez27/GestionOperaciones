<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altaPersonal', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombreEmpleado');
            $table->string('inicio');
            $table->string('telefono');
            $table->string('domicilio');
            $table->string('nss');
            $table->string('curp');
            $table->string('rfc');
            $table->string('tallaCamisa');
            $table->string('tallaPantalon');
            $table->string('servicio');

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
        Schema::dropIfExists('altaPersonal');
    }
}
