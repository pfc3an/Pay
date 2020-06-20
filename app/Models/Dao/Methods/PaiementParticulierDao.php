<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IPaiementParticulierDao;
use App\Models\Entities\PaiementParticulier;

class PaiementParticulierDao implements IPaiementParticulierDao
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
