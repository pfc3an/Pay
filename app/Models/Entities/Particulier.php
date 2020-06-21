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

    protected $hidden = ['identifiant', 'solde', 'user_id', 'digit_code']; //attributes not serializable
    protected $visible = []; //attributes serializable

    //protected $attributes = ['identifiant_md5', 'solde_md5'];
    protected $appends = ['identifiant_md5', 'solde_md5', 'digit_code_md5'];

    public function getDigitCodeMd5Attribute()
    {
        return md5($this->attributes['digit_code']);
    }
    public function getIdentifiantMd5Attribute($key)
    {
        return md5($this->attributes['identifiant']);
    }
    public function getSoldeMd5Attribute() {
        return md5($this->attributes['solde']);
    }

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
