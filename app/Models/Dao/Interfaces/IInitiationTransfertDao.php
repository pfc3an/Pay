<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\InitiationTransfert;

interface IInitiationTransfertDao
{
    public function add(InitiationTransfert $init);
    public function get($id);
    public function all();
    public function update(InitiationTransfert $init);
}
