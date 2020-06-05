<?php

use App\Models\Entities\Particulier;
use Illuminate\Database\Seeder;

class ParticulierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Particulier::create([
            'identifiant' => rand(100000, 999999),
            'profil' => 'customer',
            'solde' => 1000,
            'solde_erreur' => 0,
            'digit_code' => rand(100000, 999999),
            'depot' => true,
            'retrait' => true,
            'paiement' => true,
            'generation_qr' => true,
            'transfert_national' => true,
            'transfert_international' => true,
            'user_id' => 5,
        ]);
        Particulier::create([
            'identifiant' => rand(100000, 999999),
            'profil' => 'customer',
            'solde' => 1000,
            'solde_erreur' => 0,
            'digit_code' => rand(100000, 999999),
            'depot' => false,
            'retrait' => false,
            'paiement' => false,
            'generation_qr' => false,
            'transfert_national' => false,
            'transfert_international' => false,
            'user_id' => 5,
        ]);
        Particulier::create([
            'identifiant' => rand(100000, 999999),
            'profil' => 'trader',
            'solde' => 10000,
            'solde_erreur' => 0,
            'digit_code' => rand(100000, 999999),
            'depot' => true,
            'retrait' => true,
            'paiement' => true,
            'generation_qr' => true,
            'transfert_national' => true,
            'transfert_international' => true,
            'user_id' => 3
        ]);
    }
}
