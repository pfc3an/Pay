<?php

use App\Models\Entities\Paiement;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PaiementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paiement::create([
            'qr_code_id' => 1,
            'date' => Carbon::now(),
        ]);
        Paiement::create([
            'qr_code_id' => 2,
            'date' => Carbon::now(),
        ]);
        Paiement::create([
            'qr_code_id' => 3,
            'date' => Carbon::now(),
        ]);
    }
}
