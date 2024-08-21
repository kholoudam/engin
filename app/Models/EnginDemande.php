<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnginDemande extends Model
{
    protected $table = 'engin_demandes';

    // Define the relationship
    public function engin()
    {
        return $this->belongsTo(Engin::class, 'Engin_id');
    }
    public function demande()
    {
        return $this->belongsTo(Demande::class, 'Demande_id');
    }
}
