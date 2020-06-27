<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class HistoriqueFraisTransfert extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'champ_update', 'last_valeur', 'new_valeur',
        'date', 'frais_transfert_id', 'administrateur_id'
    ];
    
    public function frais_transfert() {
        return $this->belongsTo(FraisTransfert::class);
    }

    public function administrateur() {
        return $this->belongsTo(Administrateur::class);
    }
}
