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
       // factory('App\CategorieTache', 15)->create();
        $categorie_tache = DB::table('categorie_taches')->insert([
            'id'=>1,
            'libelle' => 'Entretien extérieur'
        ]);
        $categorie_tache = DB::table('categorie_taches')->insert([
            'id'=>2,
            'libelle' => 'Ménage'
        ]);
        $categorie_tache = DB::table('categorie_taches')->insert([
            'id'=>3,
            'libelle' => 'Rangement'
        ]);
    }
}
