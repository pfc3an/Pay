<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\Agence;

interface IAgenceDao
{
    public function add(Agence $agence);
    public function get($id);
    public function all();
    public function update(Agence $agence);
}
