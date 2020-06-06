<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IRetraitDao;
use App\Models\Entities\Retrait;

class RetraitDaoDao implements IRetraitDao
{

    public function add(Retrait $retrait)
    {
        return $retrait->save();
    }

    public function get($id) : Retrait
    {
        return Retrait::find($id);
    }

    public function all()
    {
        return Retrait::all();
    }

    public function update(Retrait $retrait)
    {
        return $retrait->update([
            'column' => "value",
        ]);
    }
}
