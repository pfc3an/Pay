<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\Commercant;

interface ICommercantDao
{
    public function add(Commercant $commercant);
    public function get($id);
    public function all();
    public function update(Commercant $commercant);
}
