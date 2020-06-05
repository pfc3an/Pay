<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\HistorioqueSousCompte;

interface IHistoriqueSousCompteDao
{
    public function add(HistorioqueSousCompte $historic);
    public function get($id);
    public function all();
}
