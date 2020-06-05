<?php

use App\Models\Entities\InitiationTransfert;
use App\Models\Entities\Particulier;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InitiationTransfertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InitiationTransfert::create([
            'id_destinataire' => Particulier::find(2)->identifiant,
            'tel' => '+21200000000',
            'montant' => 500,
            'taux' => 0,
            'frais' => 1.75,
            'devise' => 'MAD',
            'date' => Carbon::now(),
            'code_initiation' => Str::random(8),
            'recuperer' => false,
            'particulier_id' => 1,
        ]);
        InitiationTransfert::create([
            'id_destinataire' => Particulier::find(1)->identifiant,
            'tel' => '+21200000000',
            'montant' => 250,
            'taux' => 0,
            'frais' => 1.75,
            'devise' => 'MAD',
            'date' => Carbon::now(),
            'code_initiation' => Str::random(8),
            'recuperer' => false,
            'particulier_id' => 2,
        ]);
    }
}
