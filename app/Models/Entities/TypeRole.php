<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class TypeRole extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'activer', 'type_administrateur_id', 'role_id'
    ];
    

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function type_administrateur() {
        return $this->belongsTo(TypeAdministrateur::class);
    }

    
}
