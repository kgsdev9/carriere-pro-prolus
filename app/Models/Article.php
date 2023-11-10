<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

  protected $fillable= ['title', 'slug', 'event',  'category_id', 'image', 'description', 'publish_at', 'mini_description'];

  public function category() {
    return $this->belongsTo(Category::class, 'category_id');
}

}

