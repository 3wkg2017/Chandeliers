<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $fillable = [
            'title', 
            'address',
            'region',
            'style',
            'type',
            'code',
            'country',
            'material',
            'size',
            'date',
            'from_date',
            'till_date',
            'text'
    ];

   protected $table = 'cards';


    public function references()
    {
        return $this->hasMany('App\Reference');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

}



