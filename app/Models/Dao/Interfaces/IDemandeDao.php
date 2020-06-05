<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\Demande;

interface IDemandeDao
{
    public function add(Demande $demande);
    public function get($id);
    public function all();
    public function update(Demande $demande);
}
