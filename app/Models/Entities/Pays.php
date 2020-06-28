<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    
    public $timestamps = false;
    protected $fillable = [
      'designation', 'indicatif', 'activer', 'monaie_id'
    ];

    
    public function parametre() {
        return $this->hasOne(Parametre::class);
    }

    /*public function type() {
        return $this->hasMany(Type::class);
    }*/

    /* public function user() {
        return $this->hasMany(User::class);
    }*/

    public function monaie() {
        return $this->belongsTo(Monaie::class);
    }

    public function frais_transfert() {
        return $this->hasMany(FraisTransfert::class);
    }

}
