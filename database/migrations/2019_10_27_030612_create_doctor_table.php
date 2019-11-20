<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estado',200)->nullable();
            $table->string('codigo',9)->nullable();
            $table->string('especialidad',200)->nullable();
            $table->string('apPaterno',200)->nullable();
            $table->string('apMaterno',200)->nullable();
            $table->string('nombre',200)->nullable();
             $table->string('departamento',255)->nullable();
            $table->string('provincia',255)->nullable();
            $table->string('distrito',255)->nullable();
            $table->string('direccion',200)->nullable();
            $table->string('dni',9)->nullable();
            $table->string('genero',200)->nullable();
            $table->string('telefono',11)->nullable();
            $table->string('correo',300)->nullable();
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
        Schema::dropIfExists('doctor');
    }
}
