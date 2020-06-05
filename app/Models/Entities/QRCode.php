<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'montant','date','particulier_id',
        'use', 'nbr_utilisation', 'particulier_id'
    ];

    public function paiement() {
        return $this->hasOne(Paiement::class, 'qr_code_id');
    }
    public function particulier() {
        return $this->belongsTo(Particulier::class);
    }
}
