<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IPaiementDao;
use App\Models\Entities\Paiement;

class PaiemenDao implements IPaiementDao
{

    public function add(Paiement $paiement)
    {
        return $paiement->save();
    }

    public function get($id) : Paiement
    {
        return Paiement::find($id);
    }

    public function all()
    {
        return Paiement::all();
    }

    public function update(Paiement $paiement)
    {
        return $paiement->update([
            'column' => 'value'
        ]);
    }
}
