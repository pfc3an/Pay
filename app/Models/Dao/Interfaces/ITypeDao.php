<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\Type;

interface ITypeDao
{
    public function add(Type $type);
    public function get($id);
    public function all();
    public function update(Type $type);
}
