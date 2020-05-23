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
            'name' => 'admin',
            'email' => 'admin@admin.fr',
            'password' => \Illuminate\Support\Facades\Hash::make('1234@'),
            'is_admin' => true,
            'prenom' => 'admin',
            'date_naissance' => '1976-10-16',
            'genre' => '1',
            'pseudo' => 'admin'

        ]);
        $parent = DB::table('users')->insert([
            'name' => 'DUPONT',
            'email' => 'admin@admin.fr',
            'password' => \Illuminate\Support\Facades\Hash::make('1234@'),
            'is_admin' => true,
            'prenom' => 'Bernard',
            'date_naissance' => '1976-10-16',
            'genre' => '1',
            'pseudo' => 'papa'

        ]);

        $enfant = DB::table('users')->insert([
            'name' => 'DUPONT',
            'email' => 'enfant@enfant.fr',
            'password' => \Illuminate\Support\Facades\Hash::make('1234@'),
            'is_admin' => false,
            'prenom' => 'Hildegarde',
            'date_naissance' => '2008-07-30',
            'genre' => '0',
            'pseudo' => 'enfant1'
        ]);
        $enfant = DB::table('users')->insert([
            'name' => 'DUPONT',
            'email' => 'enfant@enfant.fr',
            'password' => \Illuminate\Support\Facades\Hash::make('1234@'),
            'is_admin' => false,
            'prenom' => 'Bjorn',
            'date_naissance' => '2007-04-20',
            'genre' => '1',
            'pseudo' => 'enfant2'
        ]);
    }
}
