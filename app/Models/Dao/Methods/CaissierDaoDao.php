<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\ICaissierDao;
use App\Models\Entities\Caissier;

class CaissierDaoDao implements ICaissierDao
{

    public function add(Caissier $caissier)
    {
        return $caissier->save();
    }

    public function get($id) : Caissier
    {
        return Caissier::find($id);
    }

    public function all()
    {
        return Caissier::all();
    }

    public function update(Caissier $caissier)
    {
        return $caissier->update([
            'column' => 'value',
        ]);
    }
}
