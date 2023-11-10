<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteDesign extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'type_front',
        'price',
        'popular',
        'category_id',
        'image',
    ];
}
