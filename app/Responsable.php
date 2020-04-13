<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Responsable extends Model
{
    use SoftDeletes;
    protected $fillable = ['nom', 'prenom'];
    protected $attributes = [ 'nom' => '', 'prenom' => ''];
    //
}
