<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IParticulierDao;
use App\Models\Entities\Paiement;
use App\Models\Entities\Particulier;

class ParticulierDao implements IParticulierDao
{


    public function add(Particulier $particulier)
    {
        return Particulier::create([
            'column' => ''
        ]);
    }

    public function get($id) : Particulier
    {
        return Particulier::find($id);
    }

    public function all()
    {
        return Particulier::all();
    }

    public function update(Particulier $particulier)
    {
        return $particulier->update([
            'column' => 'value'
        ]);
    }
}
