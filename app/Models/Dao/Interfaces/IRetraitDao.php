<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\Retrait;

interface IRetraitDao
{
    public function add(Retrait $retrait);
    public function get($id);
    public function all();
    public function update(Retrait $retrait);
}
