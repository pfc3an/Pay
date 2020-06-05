<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\HistorioquePlafondCommercant;

interface IHistoriquePlafondCommercantDao
{
    public function add(HistorioquePlafondCommercant $historic);
    public function get($id);
    public function all();
}
