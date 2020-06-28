<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{

    public $timestamps = false;
    protected $fillable = [
       'retrait', 'depot', 'transfert_national', 
       'transfert_international', 'paiement',
       'generation_qr', 'pays_id'
    ];

    
    public function pays() {
        return $this->belongsTo(Pays::class);
    }
    
    public function historique_parametre() {
        return $this->hasMany(HistoriqueParametre::class);
    }
}
