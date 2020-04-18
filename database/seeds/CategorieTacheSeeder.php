<?php

use Illuminate\Database\Seeder;

class CategorieTacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\CategorieTache', 15)->create();
    }
}
