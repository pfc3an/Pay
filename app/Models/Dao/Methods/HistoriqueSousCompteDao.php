<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IHistoriqueSousCompteDao;
use App\Models\Entities\HistorioqueSousCompte;

class HistoriqueSousCompteDao implements IHistoriqueSousCompteDao
{

    public function add(HistorioqueSousCompte $historic)
    {
        return $historic->save();
    }

    public function get($id) : HistorioqueSousCompte
    {
        return HistorioqueSousCompte::find($id);
    }

    public function all()
    {
        return HistorioqueSousCompte::all();
    }
}
