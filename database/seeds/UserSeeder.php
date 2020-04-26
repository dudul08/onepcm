<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory('App\User')->create();
        $parent = DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@admin.fr',
            'password'=>\Illuminate\Support\Facades\Hash::make('admin'),
            'is_admin'=>true,
            'prenom'=>'admin',
            'date_naissance'=>'1976-10-16',
            'genre'=>'1',
            'pseudo'=>'admin'

        ]);
        $enfant = DB::table('users')->insert([
            'name'=>'SUPPIN',
            'email'=>'enfant@enfant.fr',
            'password'=>\Illuminate\Support\Facades\Hash::make('enfant'),
            'is_admin'=>false,
            'prenom'=>'Elise',
            'date_naissance'=>'2008-07-30',
            'genre' => '0',
            'pseudo'=>'lili'
        ]);
        $enfant = DB::table('users')->insert([
            'name'=>'SUPPIN',
            'email'=>'enfant@enfant.fr',
            'password'=>\Illuminate\Support\Facades\Hash::make('enfant'),
            'is_admin'=>false,
            'prenom'=>'Baptiste',
            'date_naissance'=>'2007-04-20',
            'genre' => '1',
            'pseudo'=>'baptou'
        ]);
    }
}
