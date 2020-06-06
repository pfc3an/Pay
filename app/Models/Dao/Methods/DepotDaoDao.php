<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IDepotDao;
use App\Models\Entities\Depot;

class DepotDaoDao implements IDepotDao
{

    public function add(Depot $depot)
    {
        return $depot->save();
    }

    public function get($id) : Depot
    {
        return Depot::find($id);
    }

    public function all()
    {
        return Depot::all();
    }

    public function update(Depot $depot)
    {
        return $depot->update([
            'column' => 'value',
        ]);
    }
}
