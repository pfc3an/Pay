<?php

use App\Models\Entities\Demande;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Demande::create([
            'montant' => 500,
            'contenu' => 'Content transaction',
            'statut' => false,
            'date_envoi' => Carbon::now(),
            'client_to' => 1,
            'client_from' => 2,
        ]);
        Demande::create([
            'montant' => 250,
            'contenu' => 'Content transaction',
            'statut' => false,
            'date_envoi' => Carbon::now(),
            'client_to' => 2,
            'client_from' => 1,
        ]);
    }
}
