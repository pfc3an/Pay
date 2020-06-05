<?php

use App\Models\Entities\PaiementParticulier;
use Illuminate\Database\Seeder;

class PaiementParticulierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaiementParticulier::create([
            'paiement_id' => 1,
            'particulier_id' => 1,
            'montant' => 100,
        ]);
        PaiementParticulier::create([
            'paiement_id' => 2,
            'particulier_id' => 1,
            'montant' => 150,
        ]);
        PaiementParticulier::create([
            'paiement_id' => 3,
            'particulier_id' => 2,
            'montant' => 250,
        ]);
    }
}
