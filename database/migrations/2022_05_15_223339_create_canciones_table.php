<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nombre_cancion');
            $table->integer('Minutos');
            $table->integer('Segundos');
            $table->string('Link');
            $table->unsignedBigInteger('artista_id');
            $table->unsignedBigInteger('genero_id');
            $table->foreign('artista_id')->references('id')->on('artistas');
            $table->foreign('genero_id')->references('id')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canciones');
    }
}
