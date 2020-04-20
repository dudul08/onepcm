<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\CategorieTache
 *
 * @property int $id
 * @property string $libelle
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tache[] $taches
 * @property-read int|null $taches_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategorieTache newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategorieTache newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\CategorieTache onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategorieTache query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategorieTache whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategorieTache whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategorieTache whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategorieTache whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategorieTache whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CategorieTache withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\CategorieTache withoutTrashed()
 * @mixin \Eloquent
 */
class CategorieTache extends Model
{
    use SoftDeletes;
    protected $fillable = ['libelle'];
    protected $attributes = ['libelle' => ''];
    public function  taches(){
        return $this->hasMany('App\Tache');
    }

}
