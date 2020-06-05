<?php

use App\Models\Entities\QRCode;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class QRCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QRCode::create([
            'montant' => 100,
            'date' => Carbon::now(),
            'particulier_id' => 3,
        ]);
        QRCode::create([
            'montant' => 150,
            'date' => Carbon::now(),
            'particulier_id' => 3,
        ]);
        QRCode::create([
            'montant' => 250,
            'date' => Carbon::now(),
            'particulier_id' => 3,
        ]);
    }
}
