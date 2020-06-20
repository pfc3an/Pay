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
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function caissierDao() : ICaissierDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function clientDao() : IClientDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function commercantDao() : ICommercantDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function demandeDao() : IDemandeDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function depotDao() : IDepotDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function factureDao() : IFactureDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function historicPCDao() : IHistoriquePlafondCommercantDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function historicSCDao() : IHistoriqueSousCompteDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function initTransfertDao() : IInitiationTransfertDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function paiementDao() : IPaiementDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function paiementParticulierDao() : IPaiementParticulierDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function particulierDao() : IParticulierDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function qrCodeDao() : IQRCodeDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function rectificationDao() : IRectificationDepotDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function retraitDao() : IRetraitDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function sousCompteDao() : ISousCompteDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function transfertDao() : ITransfertDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function typeDao() : ITypeDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }
    public static function userDao() : IUserDao {
        App::bind('dao', function(){
            $config = config('config');
            return new $config['v2'][0];
        });
        return  App::make('dao');
    }


    public function init(){
        App::bind('dao', function(){
            return new MTaskDao2();
        });
        return App::make('dao');
    }
}
