<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionDesarrolladorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_desarrollador', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_evaluador')->unsigned();
            $table->integer('id_evaluado')->unsigned();
            $table->integer('calificacion');
            $table->string('comentarios');
            $table->foreign('id_evaluador')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('id_evaluado')
                ->references('id')->on('users')
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
