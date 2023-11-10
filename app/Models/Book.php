<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable =  ['title', 'slug',  'views', 'price' , 'document', 'description', 'url', 'category_id'];

}





