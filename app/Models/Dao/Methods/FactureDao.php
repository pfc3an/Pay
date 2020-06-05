<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IFactureDao;
use App\Models\Entities\Facture;
use App\Models\Entities\QRCode;
use Illuminate\Database\Eloquent\Collection;

class FactureDao implements IFactureDao
{

    /**
     * @param Facture $facture
     * @return bool
     */
    public function add(Facture $facture)
    {
        return $facture->save();
    }

    /**
     * @param $id
     * @return Facture
     */
    public function get($id) : Facture
    {
        return Facture::find(id);
    }

    /**
     * @return Facture[]|Collection
     */
    public function all()
    {
        return Facture::all();
    }

    /**
     * @param Facture $facture
     * @return bool
     */
    public function update(Facture $facture) : bool
    {
        return $facture->update([
            'column' => 'value',
        ]);
    }
}
