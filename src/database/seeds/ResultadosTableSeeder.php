<?php

use ApiRacer\Models\Prova;
use ApiRacer\Models\Corredor;
use Illuminate\Database\Seeder;

class ResultadosTableSeeder extends Seeder
{
    /**
     * Execute as sementes do banco de dados.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $provas = Prova::all();
        Corredor::all()->each(function ($corredor) use ($provas, $faker) {
           $corredor->resultados()->attach($provas, [
                'hora_inicio' => $faker->randomElement(['10:00', '11:00', '12:00']),
                'hora_fim' => $faker->randomElement(['14:00', '15:00', '16:00'])
            ]);
        });
    }
}
