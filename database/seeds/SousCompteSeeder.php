<?php

use App\Models\Entities\SousCompte;
use Illuminate\Database\Seeder;

class SousCompteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SousCompte::create([
            'pass' => 'root',
            'activer' => false,
            'client_id' => 1,
            'commercant_id' => 1,
        ]);
        SousCompte::create([
            'pass' => 'root',
            'activer' => false,
            'client_id' => 2,
            'commercant_id' => 1,
        ]);
    }
}
