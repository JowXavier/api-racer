<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvasTable extends Migration
{
    /**
     * Executa as migrações.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipo', ['3km', '5km', '10km', '21km', '42km']);
            $table->dateTime('data');
            $table->timestamps();
        });
    }

    /**
     * Reverte as migrações..
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provas');
    }
}
