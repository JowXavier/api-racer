<?php

use ApiRacer\Models\Prova;
use Illuminate\Database\Seeder;

class ProvasTableSeeder extends Seeder
{
    /**
     * Execute as sementes do banco de dados.
     *
     * @return void
     */
    public function run()
    {
        factory(Prova::class, 20)->create();
    }
}
