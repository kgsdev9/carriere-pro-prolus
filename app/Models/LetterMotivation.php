<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterMotivation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'contenu', 'image', 'category_id', 'slug'];

        public function category() {
            return  $this->belongsTo(Category::class, 'category_id');
        }



}
