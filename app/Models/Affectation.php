<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;

    protected $fillable = ['DateAffectation','etat','Engin_id'];
    // Définir la relation detailDemandes
    public function detailDemandes()
    {
        return $this->hasMany(DetailDemande::class);
    }
    
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
    }
    
    // Définir la relation avec le modèle Engin
    public function engin()
    {
        return $this->belongsTo(Engin::class, 'Engin_id');
    }
    
    // Ajouter cette relation
    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }

    public function detailDemande()
    {
        return $this->hasOne(DetailDemande::class, 'Demande_id', 'demande_id');
    }
}
