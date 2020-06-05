<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\ITransfertDao;
use App\Models\Entities\Transfert;

class TransfertDao implements ITransfertDao
{

    public function add(Transfert $transfert)
    {
        return $transfert->save();
    }

    public function get($id) : Transfert
    {
        return Transfert::find($id);
    }

    public function all()
    {
        return Transfert::all();
    }

    public function update(Transfert $transfert)
    {
        return $transfert->update([
            'column' => 'value'
        ]);
    }
}
