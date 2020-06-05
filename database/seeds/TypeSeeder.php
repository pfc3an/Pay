<?php

use App\Models\Entities\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'designation' => 'Basic',
            'plafond_solde' => 25000,
            'plafond_retrait' => 6000,
            'plafond_transfert' => 6000,
            'pays_id' => 1,
        ]);
        Type::create([
            'designation' => 'Premium',
            'plafond_solde' => 50000,
            'plafond_retrait' => 9000,
            'plafond_transfert' => 15000,
            'pays_id' => 1,
        ]);
        Type::create([
            'designation' => 'Gold',
            'plafond_solde' => 150000,
            'plafond_retrait' => 25000,
            'plafond_transfert' => 25000,
            'pays_id' => 1,
        ]);
    }
}
