<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class InitiationTransfert extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_destinataire', 'montant', 'tel', 'taux',
        'frais', 'devise', 'date', 'code_initiation',
        'recuperer', 'particulier_id'
    ];

    public function transferts(){
        return $this->hasMany(Transfert::class);
    }
    public function particulier(){
        return $this->belongsTo(Particulier::class);
    }
}
