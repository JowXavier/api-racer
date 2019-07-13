<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorredoresProvasTable extends Migration
{
    /**
     * Executa as migrações.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredores_provas', function (Blueprint $table) {
            $table->bigInteger('corredor_id')->unsigned();
            $table->bigInteger('prova_id')->unsigned();

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
        Schema::dropIfExists('corredores_provas');
    }
}
