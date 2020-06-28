<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class AdministrateurRole extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'activer', 'role_id', 'administrateur_id'
    ];
    

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function administrateur() {
        return $this->belongsTo(Administrateur::class);
    }
}
