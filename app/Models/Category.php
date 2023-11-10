<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public  $table ="categories";
    protected $fillable=  ['name','slug','description','publish_at'];


    public function cvs() {
        return $this->hasMany(Cv::class);
    }

    public function articles() {
        return $this->hasMany(Article::class);
    }




}
