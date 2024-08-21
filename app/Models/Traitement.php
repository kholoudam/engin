<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{
    protected $fillable = ['utilisateur_id', 'demande_id'];

    // Définir les relations avec Utilisateur et Demande
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
    }

    public function demande()
    {
        return $this->belongsTo(Demande::class, 'demande_id');
    }
    
    public function engin()
    {
        return $this->belongsTo(Engin::class, 'Engin_id');
    }

    public function critere()
    {
        return $this->belongsTo(Critere::class, 'Critere_id');
    }
}