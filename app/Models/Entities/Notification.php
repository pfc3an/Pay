<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'contenu', 'traiter',
        'table', 'id_historique', 'role_id'
    ];
    

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function traitement_notification() {
        return $this->hasOne(TraitementNotification::class);
    }
}
