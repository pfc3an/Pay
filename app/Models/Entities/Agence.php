<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    protected $fillable = [
        'adresse', 'tel', 'password'
    ];

    public function caissiers(){
        return $this->hasMany(Caissier::class);
    }
}
