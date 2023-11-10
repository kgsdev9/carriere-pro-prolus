<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'description', 'price', 'category_id', 'image', 'document', 'slug'];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }


}






