<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MarcasSeeder::class);
        $this->call(AgentesSeeder::class);
        //$this->call(AgentesSeeder::class);

    }
}
