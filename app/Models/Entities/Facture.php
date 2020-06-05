<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = [
        'email', 'payer', 'url_fichier', 'commercant_id'
    ];

    public function commerce(){
        return $this->belongsTo(Commercant::class);
    }
}
