<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\Facture;

interface IFactureDao
{
    public function add(Facture $facture);
    public function get($id);
    public function all();
    public function update(Facture $facture);
}
