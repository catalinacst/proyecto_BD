<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ModelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for($i=1;$i<=15;$i++)
      DB::table('modelos')->insert([
          'marca_id' => $i,
          'nombre' => $faker->shuffle('JAS 43545IO'),
          'potencia' => $faker->postcode
      ]);
    }
}
