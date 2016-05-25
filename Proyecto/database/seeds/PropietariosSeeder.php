<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PropietariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for($i=0; $i<15; $i++){
          DB::table('propietarios')->insert([
              'nombre' => $faker->firstName,
              'apellidos' => $faker->lastName,
              'ciudad' => $faker->state,
              'direccion' => $faker->streetAddress,
              'fecha_nac' => $faker->date($format = 'Y-m-d', $max = '-17 years')
          ]);
      }
    }
}

//dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = date_default_timezone_get())
