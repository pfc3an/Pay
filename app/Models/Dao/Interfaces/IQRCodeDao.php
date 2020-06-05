<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\QRCode;

interface IQRCodeDao
{
    public function add(QRCode $qrcode);
    public function get($id);
    public function all();
    public function update(QRCode $qrcode);
}
