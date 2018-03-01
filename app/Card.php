<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    return $this->hasMany('App\Image', 'foreign_key');
}
