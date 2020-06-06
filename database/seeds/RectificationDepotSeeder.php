<?php

use App\Models\Entities\RectificationDepot;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RectificationDepotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RectificationDepot::create([
            'date' => Carbon::now(),
            'depot_id' => 1,
            'caissier_id' => 1,
            'montant_correcte' => 100,
        ]);
        RectificationDepot::create([
            'date' => Carbon::now(),
            'depot_id' => 3,
            'caissier_id' => 1,
            'montant_correcte' => 400,
        ]);
    }
}
