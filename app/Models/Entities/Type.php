<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'designation', 'plafond_solde',
        'plafond_retrait', 'plafond_transfert'
    ];

    public function pays(){
        return $this->belongsTo(Pays::class);
    }
    public function commerces(){
        return $this->hasMany(Commercant::class);
    }
}
