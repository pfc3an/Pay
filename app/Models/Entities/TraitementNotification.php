<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class TraitementNotification extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'date', 'notification_id', 'administrateur_id'
    ];
    

    public function administrateur() {
        return $this->belongsTo(Administrateur::class);
    }

    public function notification() {
        return $this->belongsTo(Notification::class);
    }

}
