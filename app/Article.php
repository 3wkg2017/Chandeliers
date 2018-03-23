<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $fillable = [
			'text',
			'url'
    ];

   protected $table = 'articles';

}

