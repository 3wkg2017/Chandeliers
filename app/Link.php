<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
	protected $fillable = [
			'text',
			'url'
    ];

   protected $table = 'liks';

}

