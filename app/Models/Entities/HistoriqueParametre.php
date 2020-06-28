<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class HistoriqueParametre extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'parametre', 'action', 'date',
        'parametre_id', 'administrateur_id'
    ];

    
    public function parametre() {
        return $this->belongsTo(Parametre::class);
    }
    
    public function administrateur() {
        return $this->belongsTo(Administrateur::class);
    }
}
