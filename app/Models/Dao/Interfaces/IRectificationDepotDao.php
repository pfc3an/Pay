<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\RectificationDepot;

interface IRectificationDepotDao
{
    public function add(RectificationDepot $rectificationDepot);
    public function get($id);
    public function all();
    public function update(RectificationDepot $rectificationDepot);
}

