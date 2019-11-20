<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('examen_id');
            $table->unsignedbigInteger('alumno_id');
            $table->string('puntuacion')->nullable();
            $table->string('diagnostico')->nullable();
            $table->string('test_estado')->nullable();
            $table->date('fecexam')->nullable();
            $table->timestamps();

            $table->foreign('examen_id')
                  ->references('id')
                  ->on('examen')
                  ->OnDelete('cascade');

            $table->foreign('alumno_id')
                  ->references('id')
                  ->on('alumnos')
                  ->OnDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
