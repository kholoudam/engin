<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnginAffecte extends Model
{
    use HasFactory;

    protected $table = 'engin_affectes';

    protected $fillable = [
        'Engin_id',
        'Affectation_id',
    ];

    public function engin()
    {
        return $this->belongsTo(Engin::class);
    }

    public function affectation()
    {
        return $this->belongsTo(Affectation::class);
    }
}
