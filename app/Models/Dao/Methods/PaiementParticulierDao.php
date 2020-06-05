<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IPaimentParticulierDao;
use App\Models\Entities\PaiementParticulier;

class PaiementParticulierDao implements IPaimentParticulierDao
{

    public function add(PaiementParticulier $pp)
    {
        return $pp->save();
    }

    public function get($id) : PaiementParticulier
    {
        return PaiementParticulier::find($id);
    }

    public function all()
    {
        return PaiementParticulier::all();
    }

    public function update(PaiementParticulier $pp)
    {
        return $pp->update([
            'column' => 'value'
        ]);
    }
}
