<?php

use App\Models\Entities\FraisTransfert;
use Illuminate\Database\Seeder;

class FraisTransfertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FraisTransfert::create([
            'type' => 'pourcentage',
            'min'=>30,
            'max'=>1999,
            'frais'=>0.4,
            'activer'=>true,
            'pays_id'=>1
        ]);
        FraisTransfert::create([
            'type' => 'prix',
            'min'=>2000,
            'max'=>3999,
            'frais'=>200,
            'activer'=>true,
            'pays_id'=>1
        ]);
        FraisTransfert::create([
            'type' => 'pourcentage',
            'min'=>5000,
            'max'=>5000,
            'frais'=>0.5,
            'activer'=>true,
            'pays_id'=>1
        ]);
    }
}
