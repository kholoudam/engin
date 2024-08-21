<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = ['Entite', 'Poste', 'DateSortie', 'Shift'];

    public function detailDemandes()
    {
        return $this->hasMany(DetailDemande::class, 'Demande_id');
    }

    public function enginDemandes()
    {
        return $this->hasMany(EnginDemande::class, 'Demande_id');
    }

    // Définir la relation inverse avec Traitement
    public function traitements()
    {
        return $this->hasMany(Traitement::class, 'demande_id');
    }
}

