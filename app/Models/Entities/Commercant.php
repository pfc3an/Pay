<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Commercant extends Model
{
    protected $fillable = [
        'type_id', 'particulier_id'
    ];

    public function type() {
        return $this->belongsTo(Type::class);
    }
    public function particulier() {
        return $this->belongsTo(Particulier::class);
    }
    public function factures() {
        return $this->hasMany(Facture::class);
    }
    public function sous_comptes() {
        return $this->hasMany(SousCompte::class);
    }
}
