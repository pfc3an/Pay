<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Monaie extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'designation', 'code_iso', 'symbole'
    ];
    
    public function pays() {
        return $this->hasMany(Pays::class);
    }
    
}
