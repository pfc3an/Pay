<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'particulier_id'
    ];

    public function particulier() {
        return $this->belongsTo(Particulier::class);
    }
    public function sous_comptes() {
        return $this->hasMany(SousCompte::class);
    }
    public function demande_send() {
        return $this->hasMany(Demande::class, 'client_from');
    }
    public function demande_receive() {
        return $this->hasMany(Demande::class, 'client_to');
    }
}
