<?php

use App\Models\Entities\Commercant;
use Illuminate\Database\Seeder;

class CommercantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Commercant::create([
            'type_id' => 1,
            'particulier_id' => 3,
        ]);
    }
}
