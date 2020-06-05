<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IQRCodeDao;
use App\Models\Entities\QRCode;
use Illuminate\Database\Eloquent\Collection;

class QRCodeDao implements IQRCodeDao
{

    /**
     * @param QRCode $qrcode
     * @return bool
     */
    public function add(QRCode $qrcode) : bool
    {
        return $qrcode->save();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return QRCode::find($id);
    }

    /**
     * @return QRCode[]|Collection
     */
    public function all()
    {
        return QRCode::all();
    }

    /**
     * @param QRCode $qrcode
     * @return bool
     */
    public function update(QRCode $qrcode) : bool
    {
        return $qrcode->update([
            'use' => $qrcode->use
        ]);
    }
}
