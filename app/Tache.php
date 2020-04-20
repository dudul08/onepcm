<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Tache
 *
 * @property int $id
 * @property string $libelle
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $categorie_tache_id
 * @property int $nombre_points
 * @property int $nombre_points_bonus
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\CategorieTache $categorieTache
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tache newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tache newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Tache onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tache query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tache whereCategorieTacheId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tache whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tache whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tache whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tache whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tache whereNombrePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tache whereNombrePointsBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tache whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tache withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Tache withoutTrashed()
 * @mixin \Eloquent
 */
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
