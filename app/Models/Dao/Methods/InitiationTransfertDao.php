<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IInitiationTransfertDao;
use App\Models\Entities\InitiationTransfert;
use Illuminate\Validation\Rules\In;

class InitiationTransfertDao implements IInitiationTransfertDao
{

    public function add(InitiationTransfert $init)
    {
        return $init->save();
    }

    public function get($id) : InitiationTransfert
    {
        return InitiationTransfert::find($id);
    }

    public function all()
    {
        return InitiationTransfert::all();
    }

    public function update(InitiationTransfert $init)
    {
        return $init->update([
            'column' => 'value'
        ]);
    }
}
