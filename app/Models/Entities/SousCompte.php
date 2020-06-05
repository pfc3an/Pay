<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class SousCompte extends Model
{
    protected $fillable = [
        'pass', 'activer', 'date_activation',
        'client_id', 'commercant_id'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function commerce(){
        return $this->belongsTo(Commercant::class);
    }
}
