<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'date', 'qr_code_id'
    ];

    public function qr_code(){
        return $this->belongsTo(QRCode::class, 'qr_code_id');
    }
    public function paiement_particulier(){
        return $this->hasMany(PaiementParticulier::class);
    }

    /*public function particulier(){
        return $this->belongsToMany(Particulier::class, 'paiement_particuliers')->withPivot('montant');
    }*/
}
