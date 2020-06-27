<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class FraisTransfert extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'type', 'min', 'max', 'frais',
           'activer', 'pays_id'
    ];

    
    public function pays() {
        return $this->belongsTo(Pays::class);
    }
    
    public function historique_frais_transfert() {
        return $this->hasMany(HistoriqueFraisTransfert::class);
    }
}
