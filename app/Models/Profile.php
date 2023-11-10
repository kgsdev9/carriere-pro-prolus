<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
         'prenom',
      'speatch',
       'email',
        'pays',
        'ville',
        'user_id',
        'specialite_id'
        ,'languages_id
        '];

    public function  specialite() {
        return $this->belongsTo(Specialites::class, 'specialite_id');
    }



}
