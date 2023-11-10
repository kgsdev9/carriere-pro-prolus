<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'poste',
        'description',
        'date_debut',
        'date_fin',
        'enfonction',
        'tri',
        'user_id',
        'tag_id'
    ];
}
