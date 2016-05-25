<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class VehiculosSeeder extends Seeder
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
      DB::table('vehiculos')->insert([
          'propietario_id' => $i,
          'modelo_id' => $i,
          'fecha_matricula' => $faker->date($format = 'Y-m-d', $max = '-17 years')
      ]);
    }
    }
}
