<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailDemande extends Model
{
    use HasFactory;

    protected $fillable = ['Demande_id', 'FamilleEngin', 'TypeEngin', 'Quantite', 'RaisonDemande'];
    
    public function demande()
    {
        return $this->belongsTo(Demande::class, 'Demande_id');
    }
    // Si DetailDemande appartient à Affectation
    public function affectation()
    {
        return $this->belongsTo(Affectation::class);
    }
}
