<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo',9)->nullable();
            $table->string('estado',100)->nullable();
            $table->string('escuela',100)->nullable();
            $table->string('ciclo',11)->nullable();
            $table->string('apPaterno',200)->nullable();
            $table->string('apMaterno',200)->nullable();
            $table->string('nombre',200)->nullable();
            $table->string('departamento',255)->nullable();
            $table->string('provincia',255)->nullable();
            $table->string('distrito',255)->nullable();
            $table->string('direccion',200)->nullable();
            $table->string('dni',9)->nullable();
            $table->string('genero',200)->nullable();
            $table->string('telefono',12)->nullable();
            $table->string('correo',300)->nullable();
            $table->string('username',200)->nullable();
            $table->string('password',200)->nullable();
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
        Schema::dropIfExists('alumnos');
    }
}
