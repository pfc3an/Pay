<?php

use App\Models\Entities\Agence;
use Illuminate\Database\Seeder;

class AgenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agence::create([
            'tel' => '+21200000000',
            'password' => 'root',
            'adresse' => 'Maarif Casablanca',
        ]);
        Agence::create([
            'tel' => '+21200000000',
            'password' => 'root1',
            'adresse' => 'Oasis Casablanca',
        ]);
    }
}
