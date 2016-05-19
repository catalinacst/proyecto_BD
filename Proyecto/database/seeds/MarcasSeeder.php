<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Faker::create();

      DB::table('marcas')->insert([
          'nombre' => 'Mazda',
          'direccion' => $faker->address,
      ]);
      
      DB::table('marcas')->insert([
          'nombre' => 'Suzuki',
          'direccion' => $faker->address,
      ]);
    }
}
