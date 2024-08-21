<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $table = 'details';
    
    protected $fillable = ['Description','Critere_id','Engin_id'];


    // Relation avec le modèle Engin
    public function engin()
    {
        return $this->belongsTo(Engin::class, 'Engin_id');
    }

    // Relation avec le modèle Critere
    public function critere()
    {
        return $this->belongsTo(Critere::class, 'Critere_id');
    }    
    
}
