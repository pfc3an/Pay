<?php

use App\Models\Entities\Transfert;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TransfertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transfert::create([
            'date' => Carbon::now(),
            'particulier_id' => 2,
            'initiation_transfert_id' => 1,
        ]);
        Transfert::create([
            'date' => Carbon::now(),
            'particulier_id' => 1,
            'initiation_transfert_id' => 2,
        ]);
    }
}
