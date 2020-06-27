<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'type_administrateur_id'
    ];
    
    public function historique_frais_transfert() {
        return $this->hasMany(HistoriqueFraisTransfert::class);
    }

    public function historique_parametre() {
        return $this->hasMany(HistoriqueParametre::class);
    }

    public function traitement_notification() {
        return $this->hasMany(TraitementNotification::class);
    }

    /*public function user() {
        return $this->belongsTo(User::class);
    }*/

    public function type_administrateur() {
        return $this->belongsTo(TypeAdministrateur::class);
    }

    public function administrateur_role() {
        return $this->hasMany(AdministrateurRole::class);
    }


}
