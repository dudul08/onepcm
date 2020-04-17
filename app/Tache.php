<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tache extends Model
{
    use SoftDeletes;
    protected $fillable = ['libelle'];
    protected $attributes = [ 'libelle' => ''];
    public static function getAttributsFillable() {
        $tache = new Tache();
        return $tache->getFillable();
    }
}
