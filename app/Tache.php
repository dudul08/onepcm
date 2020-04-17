<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tache extends Model
{
    use SoftDeletes;
    protected $fillable = ['libelle','id_categorie_taches'];
    protected $attributes = [ 'libelle' => '','id_categorie_taches'=>''];
    public static function getAttributsFillable() {
        $tache = new Tache();
        return $tache->getFillable();
    }
    public function categorieTache(){
        return $this->belongsTo('App\CategorieTache','id_categorie_taches');
    }
}
