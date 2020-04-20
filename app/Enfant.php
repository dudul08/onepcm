<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Enfant
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property string $prenom
 * @property string $date_naissance
 * @property int $genre
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enfant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enfant newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Enfant onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enfant query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enfant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enfant whereDateNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enfant whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enfant whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enfant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enfant whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enfant wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enfant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Enfant withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Enfant withoutTrashed()
 * @mixin \Eloquent
 */
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
