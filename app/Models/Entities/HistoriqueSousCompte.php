<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class HistoriqueSousCompte extends Model
{
    protected $fillable = [
        'type_id', 'admin_id', 'plafond',
        'last_value', 'new_value'
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
