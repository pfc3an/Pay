<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IHistoriquePlafondCommercantDao;
use App\Models\Entities\HistorioquePlafondCommercant;

class HistoriquePlafondCommercantDao implements IHistoriquePlafondCommercantDao
{

    public function add(HistorioquePlafondCommercant $historic)
    {
        return $historic->save();
    }

    public function get($id) : HistorioquePlafondCommercant
    {
        return HistorioquePlafondCommercant::find($id);
    }

    public function all()
    {
        return HistorioquePlafondCommercant::all();
    }
}
