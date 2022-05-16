<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadisticasArtistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticas_artistas', function (Blueprint $table) {
            $table->date('Fecha');
            $table->timestamps();
            $table->integer('Cantidad_reproducciones');
            $table->integer('Cantidad_descargas');
            $table->double('Valoración_promedio');
            $table->unsignedBigInteger('artista_id');
            $table->foreign('artista_id')->references('id')->on('artistas');
            $table->primary('Fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadisticas_artistas');
    }
}
