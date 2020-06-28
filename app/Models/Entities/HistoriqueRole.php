<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class HistoriqueRole extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'action' ,'date', 'administrateur_id',
        'administrateur_receive', 'role_id'
    ];
    

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function administrateur() {
        return $this->belongsTo(Administrateur::class);
    }

    public function administrateur_receive() {
        return $this->belongsTo(Administrateur::class, 'administrateur_receive');
    }
}
