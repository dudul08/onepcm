<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategorieTache extends Model
{
    use SoftDeletes;
    protected $fillable = ['libelle'];
    protected $attributes = ['libelle' => ''];

}
