<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable  = [
        'title',
        'slug',
        'description',
        'price',
        'paiement_nombre',
        'url',
        'total_buye',
        'category_id',
        'popular',
        'dev_contact',

    ];
}
