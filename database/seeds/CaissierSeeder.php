<?php

use App\Models\Entities\Caissier;
use Illuminate\Database\Seeder;

class CaissierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caissier::create([
            'type' => 'leader',
            'user_id' => 6,
            'agence_id' => 1,
        ]);
        Caissier::create([
            'type' => 'normal',
            'user_id' => 7,
            'agence_id' => 1,
        ]);
    }
}
