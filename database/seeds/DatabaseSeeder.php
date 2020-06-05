<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(ParticulierSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(CommercantSeeder::class);
        $this->call(SousCompteSeeder::class);
        $this->call(FactureSeeder::class);
        $this->call(QRCodeSeeder::class);
        $this->call(PaiementSeeder::class);
        $this->call(PaiementParticulierSeeder::class);
        $this->call(DemandeSeeder::class);
        $this->call(InitiationTransfertSeeder::class);
        $this->call(TransfertSeeder::class);
    }
}
