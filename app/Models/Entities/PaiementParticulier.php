<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class PaiementParticulier extends Model
{
    //public $timestamps = false;
    protected $fillable = [
        'montant', 'paiement_id', 'particulier_id'
    ];

    public function paiemment(){
        return $this->belongsTo(Paiement::class);
    }
    public function particulier(){
        return $this->belongsTo(Particulier::class);
    }
}
