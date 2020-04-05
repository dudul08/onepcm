<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    protected $fillable = ['nom','prenom','genre','date_naissance','actif'];
    protected  $attributes=['genre'=>'1','nom'=>'tes1','prenom'=>'test2','date_naissance'=>'2000-01-01'];
    public function scopeActif($query){
        return $query->where('actif',1)->get();
    }
    public function age()
    {
        $dateNaissance = new DateTime($this->date_naissance);
        $dateJour = new DateTime(date("Y-m-d"));
        $interval =$dateJour->diff($dateNaissance);
        return $interval->format('%y ans et %m mois');
    }

   /* public function getGenreAttribute($genre)
    {
        return ['0'=>'Fille','1'=>'Garçon'][$genre];
    }*/

    public function getGenreLibelle(){
         return $this->getTableauGenre()[$this->genre];
    }
    public function getTableauGenre(){
        return ['0'=>'Fille','1'=>'Garçon',''=>''];
    }
}
