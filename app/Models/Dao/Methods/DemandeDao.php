<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IDemandeDao;
use App\Models\Entities\Demande;

class DemandeDao implements IDemandeDao
{

    public function add(Demande $demande)
    {
        return $demande->save();
    }

    public function get($id) : Demande
    {
        return Demande::find($id);
    }

    public function all()
    {
        return Demande::all();
    }

    public function update(Demande $demande)
    {
        return $demande->update([
            'column' => 'value'
        ]);
    }
}
