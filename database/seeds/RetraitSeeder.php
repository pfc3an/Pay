<?php

use App\Models\Entities\Retrait;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RetraitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Retrait::create([
            'montant' => 100,
            'date' => Carbon::now(),
            'caissier_id' => 1,
            'particulier_id' => 1,
        ]);
        Retrait::create([
            'montant' => 200,
            'date' => Carbon::now(),
            'caissier_id' => 1,
            'particulier_id' => 2,
        ]);
        Retrait::create([
            'montant' => 500,
            'date' => Carbon::now(),
            'caissier_id' => 2,
            'particulier_id' => 3,
        ]);
    }
}
