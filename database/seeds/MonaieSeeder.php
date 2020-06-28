<?php

use App\Models\Entities\Monaie;
use Illuminate\Database\Seeder;

class MonaieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Monaie::create([
            'designation'=> 'Dirham',
            'code_iso' => 'MAD',
            'symbole' =>''
        ]);
        Monaie::create([
            'designation' => 'CFA Afrique central',
            'code_iso' =>'XAF',
            'symbole' =>''
        ]);
        Monaie::create([
            'designation' => "CFA Afrique de l'Ouest",
            'code_iso' => 'XOF',
            'symbole' =>''  
        ]);
    }
}
