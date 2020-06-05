<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Transfert extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'date', 'particulier_id', 'initiation_transfert_id'
    ];

    public function particulier(){
        return $this->belongsTo(Particulier::class);
    }
    public function init_transfert(){
        return $this->belongsTo(InitiationTransfert::class);
    }
}
