<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class AgentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      DB::table('agentes')->insert([
          'nombre' => 'Yeferson',
          'apellidos' => 'Gaitan'
      ]);
      DB::table('agentes')->insert([
          'nombre' => 'Catalina',
          'apellidos' => 'Castro'
      ]);

    }
}
