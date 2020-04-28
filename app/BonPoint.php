<?php

namespace App;
use DateTime;
use Illuminate\Database\Eloquent\Model;

/**
 * App\BonPoint
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BonPoint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BonPoint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BonPoint query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BonPoint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BonPoint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BonPoint whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $responsable_id
 * @property int $enfant_id
 * @property int $tache_id
 * @property string $date_bonpoint
 * @property int $is_avec_bonus
 * @property-read \App\Enfant $enfant
 * @property-read \App\Responsable $responsable
 * @property-read \App\Tache $tache
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BonPoint whereDateBonpoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BonPoint whereEnfantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BonPoint whereIsAvecBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BonPoint whereResponsableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BonPoint whereTacheId($value)
 */
class BonPoint extends Model
{
    public function enfant(){
        return $this->belongsTo('App\User','enfant_id');
    }
    public function responsable(){
        return $this->belongsTo('App\User','responsable_id');
    }
    public function tache(){
        return $this->belongsTo('App\Tache')->withTrashed();
    }

    public function getDateBonPoint()
    {
        $dateBonPoint = new DateTime($this->date_bonpoint);
        return $dateBonPoint->format('d/m/Y');

    }
}
