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
      $marcas = array('Mazda','Suzuki','Audi','BMW',
              'Chevrolet', 'Dodge', 'Ford', 'Honda', 'Hyundai', 'Kia', 'Mercedes-Benz',
              'Mitsubishi', 'Nissan', 'Renault', 'Toyota');

      foreach ($marcas as $marcaIndividual) {
        DB::table('marcas')->insert([
            'nombre' => $marcaIndividual,
            'direccion' => $faker->streetAddress,
          ]);
        }
        
    }
}
