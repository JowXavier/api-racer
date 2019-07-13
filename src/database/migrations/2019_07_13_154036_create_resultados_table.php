<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosTable extends Migration
{
    /**
     * Executa as migrações.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->bigInteger('corredor_id')->unsigned();
            $table->bigInteger('prova_id')->unsigned();
            $table->time('hora_inicio');
            $table->time('hora_fim');

			$table->foreign('corredor_id')->references('id')->on('corredores')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->foreign('prova_id')->references('id')->on('provas')
				->onDelete('cascade')
				->onUpdate('cascade');
        });
    }

    /**
     * Reverte as migrações.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados');
    }
}
