<?php

use Illuminate\Database\Seeder;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tache = DB::table('taches')->insert([
            'libelle' => 'Tondre la pelouse',
            'categorie_tache_id'=>'1',
            'nombre_points'=>'10',
            'nombre_points_bonus'=>'5'
        ]);
        $tache = DB::table('taches')->insert([
            'libelle' => 'Désherber',
            'categorie_tache_id'=>'1',
            'nombre_points'=>'5',
            'nombre_points_bonus'=>'2'
        ]);
        $tache = DB::table('taches')->insert([
            'libelle' => 'Arroser les plantes',
            'categorie_tache_id'=>'1',
            'nombre_points'=>'2',
            'nombre_points_bonus'=>'1'
        ]);
        $tache = DB::table('taches')->insert([
            'libelle' => 'Passer l\'aspirateur',
            'categorie_tache_id'=>'2',
            'nombre_points'=>'5',
            'nombre_points_bonus'=>'3'
        ]);
        $tache = DB::table('taches')->insert([
            'libelle' => 'Laver les sols',
            'categorie_tache_id'=>'2',
            'nombre_points'=>'10',
            'nombre_points_bonus'=>'5'
        ]);
        $tache = DB::table('taches')->insert([
            'libelle' => 'Laver la table',
            'categorie_tache_id'=>'2',
            'nombre_points'=>'2',
            'nombre_points_bonus'=>'1'
        ]);

        $tache = DB::table('taches')->insert([
            'libelle' => 'Ranger sa chambre',
            'categorie_tache_id'=>'3',
            'nombre_points'=>'6',
            'nombre_points_bonus'=>'3'
        ]);
        $tache = DB::table('taches')->insert([
            'libelle' => 'Débarasser le lave-vaisselle',
            'categorie_tache_id'=>'3',
            'nombre_points'=>'4',
            'nombre_points_bonus'=>'2'
        ]);
    }
}
