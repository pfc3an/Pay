<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\ISousCompteDao;
use App\Models\Entities\SousCompte;

class SousCompteDao implements ISousCompteDao
{

    public function add(SousCompte $sousCompte)
    {
        return $sousCompte->save();
    }

    public function get($id) : SousCompte
    {
        return SousCompte::find($id);
    }

    public function all()
    {
        return SousCompte::all();
    }

    public function update(SousCompte $sousCompte)
    {
        return $sousCompte->update([
            'column' => 'value'
        ]);
    }
}
