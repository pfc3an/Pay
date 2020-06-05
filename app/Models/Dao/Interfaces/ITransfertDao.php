<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\Transfert;

interface ITransfertDao
{
    public function add(Transfert $transfert);
    public function get($id);
    public function all();
    public function update(Transfert $transfert);
}
