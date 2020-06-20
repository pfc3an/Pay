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

class ServiceInit
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
}
