<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
             $table->bigIncrements('cita_id');
            $table->unsignedbigInteger('horario_id');
            $table->unsignedbigInteger('test_id');
            $table->string('descripcion')->nullable();
            $table->string('estado')->nullable();
            $table->date('fecita')->nullable();
            $table->timestamps();

            $table->foreign('horario_id')
                  ->references('id')
                  ->on('horario')
                  ->OnDelete('cascade');

            $table->foreign('test_id')
                  ->references('id')
                  ->on('test')
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
        Schema::dropIfExists('cita');
    }
}
