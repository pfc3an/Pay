<?php

use App\Models\Entities\Facture;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facture::create([
            'email' => 'epay0@gmail.com',
            'url_fichier' => Str::random(16),
            'commercant_id' => 1,
        ]);
        Facture::create([
            'email' => 'epay1@gmail.com',
            'url_fichier' => Str::random(16),
            'commercant_id' => 1,
        ]);
        Facture::create([
            'email' => 'epay2@gmail.com',
            'url_fichier' => Str::random(16),
            'commercant_id' => 1,
        ]);
        Facture::create([
            'email' => 'epay3@gmail.com',
            'url_fichier' => Str::random(16),
            'commercant_id' => 1,
        ]);
        Facture::create([
            'email' => 'epay4@gmail.com',
            'url_fichier' => Str::random(16),
            'commercant_id' => 1,
        ]);
    }
}
