<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntreEngin extends Model
{
    use HasFactory;

    protected $table = 'entre_engin';

    protected $fillable = [
        'engin_id',
        'description',
        'matricule',
        'societe',
        'nom_conducteur',
        'prenom_conducteur',
        'observation',
        'compteur_valeur'
    ];

    // Relation avec le modèle Engin
    public function engin()
    {
        return $this->belongsTo(Engin::class, 'engin_id');
    }
    
    // Relation avec le modèle Critere 
    public function critere()
    {
        return $this->belongsTo(Critere::class, 'critere_id');
    }
}
