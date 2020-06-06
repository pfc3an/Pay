<?php

namespace App\Models\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Caissier extends Model
{
    protected $fillable = [
        'type', 'activer', 'agence_id', 'user_id'
    ];

    public function agence(){
        return $this->belongsTo(Agence::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function depots(){
        return $this->hasMany(Depot::class);
    }
    public function retraits(){
        return $this->hasMany(Retrait::class);
    }
    public function rectifications(){
        return $this->hasMany(RectificationDepot::class);
    }
}
