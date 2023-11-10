<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillale = ['diplome',
     'date_debut',
      'date_fin',
       'description',
        'niveau'
    ];
}
