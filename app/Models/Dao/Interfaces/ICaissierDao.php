<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\Caissier;

interface ICaissierDao
{
    public function add(Caissier $caissier);
    public function get($id);
    public function all();
    public function update(Caissier $caissier);
}
