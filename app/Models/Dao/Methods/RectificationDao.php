<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IRectificationDepotDao;
use App\Models\Entities\RectificationDepot;

class RectificationDao implements IRectificationDepotDao
{

    public function add(RectificationDepot $rectificationDepot)
    {
        return $rectificationDepot->save();
    }

    public function get($id) : RectificationDepot
    {
        return RectificationDepot::find($id);
    }

    public function all()
    {
        return RectificationDepot::all();
    }

    public function update(RectificationDepot $rectificationDepot)
    {
        return $rectificationDepot->update([
            'column' => 'value',
        ]);
    }
}
