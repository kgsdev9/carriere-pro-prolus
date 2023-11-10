<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = ['designation', 'slug','logo', 'lieu'];

    public function jobs() {
        return $this->hasMany(Job::class);
    }

}
