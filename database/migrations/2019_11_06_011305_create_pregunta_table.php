<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pregunta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('examen_id');
            $table->string('encabezado',200)->nullable();
            $table->timestamps();

            
            $table->foreign('examen_id')
                  ->references('id')
                  ->on('examen')
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
        Schema::dropIfExists('pregunta');
    }
}
