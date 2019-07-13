<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Sementes do banco de dados do aplicativo.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CorredoresTableSeeder::class);
        $this->call(ProvasTableSeeder::class);
        $this->call(CorredoresProvasTableSeeder::class);
        $this->call(ResultadosTableSeeder::class);
    }
}
