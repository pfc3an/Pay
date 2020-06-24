<?php


namespace App\Services;


use App\Models\Dao\Interfaces\IAgenceDao;
use App\Models\Dao\Interfaces\ICaissierDao;
use App\Models\Dao\Interfaces\IClientDao;
use App\Models\Dao\Interfaces\ICommercantDao;
use App\Models\Dao\Interfaces\IDemandeDao;
use App\Models\Dao\Interfaces\IDepotDao;
use App\Models\Dao\Interfaces\IFactureDao;
use App\Models\Dao\Interfaces\IHistoriquePlafondCommercantDao;
use App\Models\Dao\Interfaces\IHistoriqueSousCompteDao;
use App\Models\Dao\Interfaces\IInitiationTransfertDao;
use App\Models\Dao\Interfaces\IPaiementDao;
use App\Models\Dao\Interfaces\IPaiementParticulierDao;
use App\Models\Dao\Interfaces\IParticulierDao;
use App\Models\Dao\Interfaces\IQRCodeDao;
use App\Models\Dao\Interfaces\IRectificationDepotDao;
use App\Models\Dao\Interfaces\IRetraitDao;
use App\Models\Dao\Interfaces\ISousCompteDao;
use App\Models\Dao\Interfaces\ITransfertDao;
use App\Models\Dao\Interfaces\ITypeDao;
use App\Models\Dao\Interfaces\IUserDao;
use Illuminate\Support\Facades\App;

class DaoInit
{
    protected static $KEY = "config_dao";
    protected static $CONFIG;

    protected static function CONFIG()
    {
        return self::$CONFIG = config(self::$KEY);
    }


    public static function agenceDao() : IAgenceDao {
        $config = end(self::CONFIG()['agence']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function caissierDao() : ICaissierDao {
        $config = end(self::CONFIG()['caissier']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function clientDao() : IClientDao {
        $config = end(self::CONFIG()['client']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function commercantDao() : ICommercantDao {
        $config = end(self::CONFIG()['commercant']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function demandeDao() : IDemandeDao {
        $config = end(self::CONFIG()['demande']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function depotDao() : IDepotDao {
        $config = end(self::CONFIG()['depot']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function factureDao() : IFactureDao {
        $config = end(self::CONFIG()['facture']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function historicPCDao() : IHistoriquePlafondCommercantDao {
        $config = end(self::CONFIG()['historicPC']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function historicSCDao() : IHistoriqueSousCompteDao {
        $config = end(self::CONFIG()['historicSC']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function initTransfertDao() : IInitiationTransfertDao {
        $config = end(self::CONFIG()['initTransfert']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function paiementDao() : IPaiementDao {
        $config = end(self::CONFIG()['paiement']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function paiementParticulierDao() : IPaiementParticulierDao {
        $config = end(self::CONFIG()['paiementParticulier']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function particulierDao() : IParticulierDao {
        $config = end(self::CONFIG()['particulier']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function qrCodeDao() : IQRCodeDao {
        $config = end(self::CONFIG()['qrCode']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function rectificationDao() : IRectificationDepotDao {
        $config = end(self::CONFIG()['rectification']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function retraitDao() : IRetraitDao {
        $config = end(self::CONFIG()['retrait']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function sousCompteDao() : ISousCompteDao {
        $config = end(self::CONFIG()['sousCompte']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function transfertDao() : ITransfertDao {
        $config = end(self::CONFIG()['transfert']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function typeDao() : ITypeDao {
        $config = end(self::CONFIG()['type']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function userDao() : IUserDao {
        $config = end(self::CONFIG()['user']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function paysDao() {
        $config = end(self::CONFIG()['pays']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function parametreDao() {
        $config = end(self::CONFIG()['parametre']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function fraisTransfertDao() {
        $config = end(self::CONFIG()['fraisTransfert']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function typeAdminDao() {
        $config = end(self::CONFIG()['typeAdmin']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function adminDao() {
        $config = end(self::CONFIG()['admin']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function roleDao() {
        $config = end(self::CONFIG()['role']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function adminRoleDao() {
        $config = end(self::CONFIG()['adminRole']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function typeAdminRoleDao() {
        $config = end(self::CONFIG()['typeAdminRole']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function notificationDao() {
        $config = end(self::CONFIG()['notification']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function historicFTDao() {
        $config = end(self::CONFIG()['historicFT']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function historicRoleDao() {
        $config = end(self::CONFIG()['historicRole']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function historicTypeRoleDao() {
        $config = end(self::CONFIG()['historicTypeRole']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function monaieDao() {
        $config = end(self::CONFIG()['monaie']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function deviseDao() {
        $config = end(self::CONFIG()['devise']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function historicDeviseDao() {
        $config = end(self::CONFIG()['historicDevise']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
}
