<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\ITypeDao;
use App\Models\Entities\Type;

class TypeDao implements ITypeDao
{

    public function add(Type $type)
    {
        return $type->save();
    }

    public function get($id) : Type
    {
        return Type::find($id);
    }

    public function all()
    {
        return Type::all();
    }

    public function update(Type $type)
    {
        return $type->update([
            'column' => 'value'
        ]);
    }
}
