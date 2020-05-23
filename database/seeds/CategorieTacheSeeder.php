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
            'libelle' => 'Entretien extérieur'
        ]);
        $categorie_tache = DB::table('categorie_taches')->insert([
            'libelle' => 'Ménage'
        ]);
        $categorie_tache = DB::table('categorie_taches')->insert([
            'libelle' => 'Rangement'
        ]);
    }
}
