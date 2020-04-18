<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tache extends Model
{
    use SoftDeletes;
    protected $fillable = ['libelle','categorie_tache_id','nombre_points','nombre_points_bonus'];
    protected $attributes = [ 'libelle' => '','categorie_tache_id'=>'','nombre_points'=>'','nombre_points_bonus'=>''];
    public static function getAttributsFillable() {
        $tache = new Tache();
        return $tache->getFillable();
    }
    public function categorieTache(){
        return $this->belongsTo('App\CategorieTache');
    }
}
