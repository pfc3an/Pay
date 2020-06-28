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
        $this->call(MonaieSeeder::class);
        $this->call(PaysSeeder::class);
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
        $this->call(AgenceSeeder::class);
        $this->call(CaissierSeeder::class);
        $this->call(DepotSeeder::class);
        $this->call(RetraitSeeder::class);
        $this->call(ParametreSeeder::class);
        $this->call(HistoriqueParametreSeeder::class);
        $this->call(DeviseSeeder::class);
        $this->call(HistoriqueDeviseSeeder::class);
        $this->call(FraisTransfertSeeder::class);
        $this->call(HistoriqueFraisTransfertSeeder::class);
        $this->call(AdministrateurSeeder::class);
        $this->call(HistoriqueAdministrateurSeeder::class);
        $this->call(TypeAdministrateurSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(AdministrateurRoleSeeder::class);
        $this->call(HistoriqueRoleSeeder::class);
        $this->call(TypeRoleSeeder::class);
        $this->call(HistoriqueTypeRoleSeeder::class);
        $this->call(NotificationSeeder::class);
        $this->call(TraitementNotificationSeeder::class);
    }
}
