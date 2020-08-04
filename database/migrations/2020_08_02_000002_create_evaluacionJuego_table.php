<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionJuegoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_juego', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_desarrollador')->unsigned();
            $table->integer('id_juego')->unsigned();
            $table->integer('calificacion');
            $table->string('comentarios');
            $table->foreign('id_desarrollador')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('id_juego')
                ->references('id')->on('juegos')
                ->onDelete('cascade');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
