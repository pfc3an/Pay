<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class HistoriqueTypeRole extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'action', 'date', 'administrateur_id',
        'role_id', 'type_administrateur_id'
    ];
    

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function type_administrateur() {
        return $this->belongsTo(TypeAdministrateur::class);
    }

    public function administrateur() {
        return $this->belongsTo(Administrateur::class);
    }
}
