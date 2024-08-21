<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Utilisateur extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'utilisateurs';

    protected $fillable = [
        'nom',
        'prenom',
        'username',
        'password',
        'role',
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function hasRole($role)
    {
        return $this->role === $role;
    }

    // Définir la relation inverse avec Traitement
    public function traitements()
    {
        return $this->hasMany(Traitement::class, 'utilisateur_id');
    }

}
