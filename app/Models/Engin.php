<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engin extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom',
        'Capacité',
        'Compteur',
        'Image',
    ];

    public function enginDemandes()
    {
        return $this->hasMany(EnginDemande::class, 'Engin_id');
    }
    
    public function affectations()
    {
        return $this->hasMany(Affectation::class, 'Engin_id');
    }

    // Relation avec le modèle Detail
    public function details()
    {
        return $this->hasMany(Detail::class, 'Engin_id');
    }    
    
    public function traitements()
    {
        return $this->hasMany(Traitement::class, 'Engin_id');
    }
}