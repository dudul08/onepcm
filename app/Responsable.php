<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Responsable
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsable newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Responsable onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsable query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsable whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsable whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsable wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsable whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Responsable withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Responsable withoutTrashed()
 * @mixin \Eloquent
 */
class Responsable extends Model
{
    use SoftDeletes;
    protected $fillable = ['nom', 'prenom'];
    protected $attributes = [ 'nom' => '', 'prenom' => ''];
    //
}
