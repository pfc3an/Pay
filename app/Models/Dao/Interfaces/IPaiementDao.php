<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\Paiement;

interface IPaiementDao
{
    public function add(Paiement $paiement);
    public function get($id);
    public function all();
    public function update(Paiement $paiement);
}
