<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class HistoriquePlafondCommercant extends Model
{
    protected $fillable = [
        'action', 'sous_compte_id'
    ];

    public function sous_compte(){
        return $this->belongsTo(SousCompte::class);
    }
}
