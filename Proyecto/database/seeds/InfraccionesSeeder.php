<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InfraccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      for($i=1;$i<=15;$i++){
      DB::table('infracciones')->insert([
          'propietario_id' => $i,
          'agente_id' => $i,
          'direccion_id' => $i,
          'articulo' => $faker->text($maxNbChars = 50),
          'fecha' => $faker->date($format = 'Y-m-d', $max = '-17 years'),
          'valor_total' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 90000, $max = NULL)
      ]);
    }
    }
}
