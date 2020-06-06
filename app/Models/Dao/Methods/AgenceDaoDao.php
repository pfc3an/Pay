<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IAgenceDao;
use App\Models\Entities\Agence;

class AgenceDaoDao implements IAgenceDao
{

    public function add(Agence $agence)
    {
        return $agence->save();
    }

    public function get($id) : Agence
    {
        return Agence::find($id);
    }

    public function all()
    {
        return Agence::all();
    }

    public function update(Agence $agence)
    {
        return $agence->update([
            'column' => "value",
        ]);
    }
}
