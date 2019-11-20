<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('pregunta_id');
            $table->string('descripcion',200)->nullable();
            $table->string('puntuacion',10)->nullable();
            $table->timestamps();

            $table->foreign('pregunta_id')
                  ->references('id')
                  ->on('opcion')
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
        Schema::dropIfExists('opcion');
    }
}
