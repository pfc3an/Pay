<?php

use Illuminate\Database\Seeder;
use App\Models\Entities\Pays;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        Pays::create([
            'designation' => 'Maroc',
            'indicatif' =>'+212',
            'activer' => true ,
            'monaie_id' => 1
        ]);  
        Pays::create([
            'designation' => 'Congo',
            'indicatif' =>'+242',
            'activer' => true ,
            'monaie_id' =>2
        ]);
        Pays::create([
            'designation' => 'Niger',
            'indicatif' =>'+227',
            'activer' => true ,
            'monaie_id' =>3
        ]);
    }
}
