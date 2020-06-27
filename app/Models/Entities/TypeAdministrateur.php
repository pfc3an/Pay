<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class TypeAdministrateur extends Model
{
    public $timestamps = false;
    protected $fillable = [
       'designation'
    ];
    
    public function administrateur() {
        return $this->hasMany(Administrateur::class);
    }

    public function type_role() {
        return $this->hasMany(TypeRole::class);
    }
}
