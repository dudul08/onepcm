<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    protected $fillable = ['nom','prenom','genre','date_naissance'];
    public function age()
    {
        $dateNaissance = new \DateTime($this->date_naissance);
        $dateJour = new \DateTime(date("Y-m-d"));
        $interval =$dateJour->diff($dateNaissance);
        return $interval->format('%y ans et %m mois');
    }

    public function getGenreAttribute($genre)
    {
        return ['0'=>'Fille','1'=>'Garçon'][$genre];
    }
}
