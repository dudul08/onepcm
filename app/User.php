<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DateTime;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $prenom
 * @property string $date_naissance
 * @property int $genre
 * @property int $is_admin
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDateNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePrenom($value)
 * @property string $pseudo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePseudo($value)
 */
class User extends Authenticatable
{
    use Notifiable;
    protected $attributes = [ 'name' => '', 'prenom' => '','genre' => '', 'date_naissance' => '','pseudo'=>''];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','is_admin','prenom','genre','pseudo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function isAdmin(User $user){

            return $user->is_admin;


    }
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
