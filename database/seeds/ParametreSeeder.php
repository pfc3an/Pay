<?php

use App\Models\Entities\Parametre;
use Illuminate\Database\Seeder;

class ParametreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parametre::create([
            'retrait'=>false,
            'depot'=>false,
            'transfert_national'=>false,
            'transfert_international'=>false,
            'paiement'=>false,
            'generation_qr'=>false,
            'pays_id'=>1,
        ]);
        Parametre::create([
            'retrait'=>false,
            'depot'=>false,
            'transfert_national'=>false,
            'transfert_international'=>false,
            'paiement'=>false,
            'generation_qr'=>false,
            'pays_id'=>2,
        ]);
        Parametre::create([
            'retrait'=>false,
            'depot'=>false,
            'transfert_national'=>false,
            'transfert_international'=>false,
            'paiement'=>false,
            'generation_qr'=>false,
            'pays_id'=>3,
        ]);
    }
}
