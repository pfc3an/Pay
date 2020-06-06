<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Particulier extends Model
{
    protected $fillable = [
        'identifiant', 'profil', 'solde', 'solde_erreur',
        'digit_code', 'retrait', 'depot', 'transfert_national',
        'transfert_international', 'paiement', 'generation_qr', 'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function client(){
        return $this->hasOne(Client::class);
    }
    public function commerce(){
        return $this->hasOne(Commercant::class);
    }
    public function qr_codes(){
        return $this->hasMany(QRCode::class);
    }
    public function paiement_particuliers(){
        return $this->hasMany(PaiementParticulier::class);
    }
    public function transferts(){
        return $this->hasMany(Transfert::class);
    }
    public function init_transferts(){
        return $this->hasMany(InitiationTransfert::class);
    }
    public function depots(){
        return null;
    }
    public function retraits(){
        return null;
    }

    /*public function paiments(){
        return $this->belongsToMany(Paiement::class, 'paiement_particuliers')->withPivot('montant');
    }*/
}
