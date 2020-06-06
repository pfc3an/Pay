<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\Depot;

interface IDepotDao
{
    public function add(Depot $depot);
    public function get($id);
    public function all();
    public function update(Depot $depot);
}
