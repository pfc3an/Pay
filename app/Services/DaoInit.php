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
    public static function agenceDao() : IAgenceDao {
        $config = config('config');
        $config = end($config['agence']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function caissierDao() : ICaissierDao {
        $config = config('config');
        $config = end($config['caissier']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function clientDao() : IClientDao {
        $config = config('config');
        $config = end($config['client']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function commercantDao() : ICommercantDao {
        $config = config('config');
        $config = end($config['commercant']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function demandeDao() : IDemandeDao {
        $config = config('config');
        $config = end($config['demande']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function depotDao() : IDepotDao {
        $config = config('config');
        $config = end($config['depot']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function factureDao() : IFactureDao {
        $config = config('config');
        $config = end($config['facture']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function historicPCDao() : IHistoriquePlafondCommercantDao {
        $config = config('config');
        $config = end($config['historicPC']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function historicSCDao() : IHistoriqueSousCompteDao {
        $config = config('config');
        $config = end($config['historicSC']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function initTransfertDao() : IInitiationTransfertDao {
        $config = config('config');
        $config = end($config['initTransfert']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function paiementDao() : IPaiementDao {
        $config = config('config');
        $config = end($config['paiement']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function paiementParticulierDao() : IPaiementParticulierDao {
        $config = config('config');
        $config = end($config['paiementParticulier']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function particulierDao() : IParticulierDao {
        $config = config('config');
        $config = end($config['particulier']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function qrCodeDao() : IQRCodeDao {
        $config = config('config');
        $config = end($config['qrCode']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function rectificationDao() : IRectificationDepotDao {
        $config = config('config');
        $config = end($config['rectification']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function retraitDao() : IRetraitDao {
        $config = config('config');
        $config = end($config['retrait']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function sousCompteDao() : ISousCompteDao {
        $config = config('config');
        $config = end($config['sousCompte']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function transfertDao() : ITransfertDao {
        $config = config('config');
        $config = end($config['transfert']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function typeDao() : ITypeDao {
        $config = config('config');
        $config = end($config['type']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function userDao() : IUserDao {
        $config = config('config');
        $config = end($config['user']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function paysDao() {
        $config = config('config');
        $config = end($config['pays']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function parametreDao() {
        $config = config('config');
        $config = end($config['parametre']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function fraisTransfertDao() {
        $config = config('config');
        $config = end($config['fraisTransfert']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function typeAdminDao() {
        $config = config('config');
        $config = end($config['typeAdmin']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function adminDao() {
        $config = config('config');
        $config = end($config['admin']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function roleDao() {
        $config = config('config');
        $config = end($config['role']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function adminRoleDao() {
        $config = config('config');
        $config = end($config['adminRole']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function typeAdminRoleDao() {
        $config = config('config');
        $config = end($config['typeAdminRole']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function notificationDao() {
        $config = config('config');
        $config = end($config['notification']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function historicFTDao() {
        $config = config('config');
        $config = end($config['historicFT']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function historicRoleDao() {
        $config = config('config');
        $config = end($config['historicRole']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function historicTypeRoleDao() {
        $config = config('config');
        $config = end($config['historicTypeRole']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function monaieDao() {
        $config = config('config');
        $config = end($config['monaie']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function deviseDao() {
        $config = config('config');
        $config = end($config['devise']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }
    public static function historicDeviseDao() {
        $config = config('config');
        $config = end($config['historicDevise']);
        App::bind('dao', function() use ($config) {
            return new $config;
        });
        return  App::make('dao');
    }


}
