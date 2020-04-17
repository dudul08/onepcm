<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tache extends Model
{
    use SoftDeletes;
    protected $fillable = ['libelle','categorie_tache_id'];
    protected $attributes = [ 'libelle' => '','categorie_tache_id'=>''];
    public static function getAttributsFillable() {
        $tache = new Tache();
        return $tache->getFillable();
    }
    public function categorieTache(){
        return $this->belongsTo('App\CategorieTache');
    }
}
