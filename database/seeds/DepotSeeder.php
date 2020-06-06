<?php

use App\Models\Entities\Depot;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DepotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Depot::create([
            'montant' => 100,
            'date' => Carbon::now(),
            'caissier_id' => 1,
            'particulier_id' => 1,
        ]);
        Depot::create([
            'montant' => 200,
            'date' => Carbon::now(),
            'caissier_id' => 2,
            'particulier_id' => 2,
        ]);
        Depot::create([
            'montant' => 500,
            'date' => Carbon::now(),
            'caissier_id' => 2,
            'particulier_id' => 3,
        ]);
    }
}
