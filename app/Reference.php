<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $fillable = [
            'reference-0', 
            'reference-1', 
            'reference-2', 
            'reference-3', 
            'reference-4', 
            'reference-5', 
         
    ];

   protected $table = 'references';
}
}
