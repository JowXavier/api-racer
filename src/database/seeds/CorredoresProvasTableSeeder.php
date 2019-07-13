<?php

use ApiRacer\Models\Prova;
use ApiRacer\Models\Corredor;
use Illuminate\Database\Seeder;

class CorredoresProvasTableSeeder extends Seeder
{
    /**
     * Execute as sementes do banco de dados.
     *
     * @return void
     */
    public function run()
    {
        $provas = Prova::all();
        Corredor::all()->each(function ($corredor) use ($provas) {
           $corredor->provas()->attach($provas);
        });
    }
}
