<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\SousCompte;

interface ISousCompteDao
{
    public function add(SousCompte $sousCompte);
    public function get($id);
    public function all();
    public function update(SousCompte $sousCompte);
}
