<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $fillable = [
       'designation'
    ];
    

    public function type_role() {
        return $this->hasMany(TypeRole::class);
    }

    public function administrateur_role() {
        return $this->hasMany(AdministrateurRole::class);
    }

    public function notification() {
        return $this->hasMany(Notification::class);
    }
}
