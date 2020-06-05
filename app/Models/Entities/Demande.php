<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'montant', 'contenu', 'statut',
        'date_envoi', 'client_to', 'client_from'
    ];

    public function client_to(){
        return $this->belongsTo(Client::class, 'client_to');
    }
    public function client_from(){
        return $this->belongsTo(Client::class, 'client_from');
    }
}
