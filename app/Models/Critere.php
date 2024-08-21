<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critere extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];

    // Relation inverse avec le modèle Detail
    public function details()
    {
        return $this->hasMany(Detail::class, 'Critere_id');
    }
}