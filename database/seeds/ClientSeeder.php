<?php

use App\Models\Entities\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'particulier_id' => 1,
        ]);
        Client::create([
            'particulier_id' => 2,
        ]);
    }
}
