<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'mini_description',
        'description',
        'contrat_id',
        'family_id',
        'lieu_id',
        'employeur',
        'image',
        'publish_at',
        'numero'
    ];

    public function lieu() {
        return $this->belongsTo(Lieu::class, 'lieu_id');
    }

    public function employe() {
        return $this->belongsTo(Employe::class, '');
    }

    public function contrat() {
        return $this->belongsTo(Contrat::class, 'contrat_id');
    }

    public function family() {
        return $this->belongsTo(Family::class, 'family_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'job_tag', 'job_id', 'tag_id');
    }



}
