<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\PaiementParticulier;

interface IPaiementParticulierDao
{
    public function add(PaiementParticulier $pp);
    public function get($id);
    public function all();
    public function update(PaiementParticulier $pp);
}
