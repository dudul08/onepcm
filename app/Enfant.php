<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enfant extends Model
{
    use SoftDeletes;
    protected $fillable = ['nom', 'prenom', 'genre', 'date_naissance', 'actif'];
    protected $attributes = ['genre' => '', 'nom' => '', 'prenom' => '', 'date_naissance' => ''];



    public function age()
    {
        $dateNaissance = new DateTime($this->date_naissance);
        $dateJour = new DateTime(date("Y-m-d"));
        $interval = $dateJour->diff($dateNaissance);
        return $interval->format('%y ans et %m mois');
    }

    /* public function getGenreAttribute($genre)
     {
         return ['0'=>'Fille','1'=>'Garçon'][$genre];
     }*/

    public function getGenreLibelle()
    {
        return $this->getTableauGenre()[$this->genre];
    }

    public function getTableauGenre()
    {
        return ['0' => 'Fille', '1' => 'Garçon'];
    }
}
