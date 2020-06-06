<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Retrait extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'montant', 'date', 'caissier_id', 'particulier_id'
    ];

    public function caissier(){
        return $this->belongsTo(Caissier::class);
    }
    public function particulier(){
        return $this->belongsTo(Particulier::class);
    }
}
