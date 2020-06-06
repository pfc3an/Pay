<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class RectificationDepot extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'montant_correcte', 'date', 'caissier_id'
    ];

    public function caissier(){
        return $this->belongsTo(Caissier::class);
    }
}
