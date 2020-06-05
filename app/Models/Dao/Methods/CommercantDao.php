<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\ICommercantDao;
use App\Models\Entities\Commercant;

class CommercantDao implements ICommercantDao
{

    public function add(Commercant $commercant)
    {
        return $commercant->save();
    }

    public function get($id) : Commercant
    {
        return Commercant::find(id);
    }

    public function all()
    {
        return Commercant::all();
    }

    public function update(Commercant $commercant)
    {
        return $commercant->update([
            'column' => 'value',
        ]);
    }
}
