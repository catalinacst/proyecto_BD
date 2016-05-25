<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DireccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      /*$direcciones = array('77492 Araceli Garden','262 Dusty Ford','411 Tate Curve','5152 Bartell Cliff',
              '4155 Raina Unions Apt. 614', '9039 Pollich Ridges Apt. 710', '14681 Elise Avenue Suite 278 ',
              '870 Kailyn Lake Suite 355', '199 Spinka Terrace Suite 341', '614 Bayer Walks Suite 955',
              '953 Federico Village Suite 615', '5550 Bettie Fall Suite 980 ', '44510 Goyette Green',
              '731 Batz Isle Suite 656 ', '7364 Savion Run Suite 089');*/

      for($i=1;$i<=15;$i++){
          DB::table('direcciones')->insert([
              'carrera' => $faker->streetAddress,
              'kilometro' => $faker->numberBetween($min = 20, $max = 50)
          ]);
        }
    }
}
