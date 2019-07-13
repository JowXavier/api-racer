<?php

use ApiRacer\Models\Corredor;
use Illuminate\Database\Seeder;

class CorredoresTableSeeder extends Seeder
{
    /**
     * Execute as sementes do banco de dados.
     *
     * @return void
     */
    public function run()
    {
        factory(Corredor::class, 20)->create();
    }
}
