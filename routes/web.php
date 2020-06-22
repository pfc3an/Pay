<?php

use App\Models\Entities\PaiementParticulier;
use App\Models\Entities\Particulier;
use App\Models\Entities\QRCode;
use App\Services\APIHelpers;
use App\Services\ServiceInit;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('cycles/get',[CycleController::class,'get']);
Route::get('/', function () {
    //date_default_timezone_set("Africa/Brazzaville");
    $date = Carbon::now()->isoWeek;
    date_default_timezone_set("Africa/Casablanca");
    $date1 = Carbon::now();
    //dd($date, $date1);
    return view('welcome');
});
Route::get('test', function () {
    /*$u = config('database')['connections']['pgsql']['username'];
    dump($u);
    dump(\App\Models\Entities\Commercant::all());
    config('database')['connections']['pgsql']['username'] = 'kyle';
    config('database')['connections']['pgsql']['password'] = 'kyle';
    dd(\App\Models\Entities\Client::all());
    die();
    dd($uu);
    dump(__('messages.hello'));
    dump($locale = App::getLocale());
    App::setLocale('fr');
    dump($locale = App::getLocale());
    dump(__('messages.hello'));*/
    //return Response::json(Particulier::with(['client', 'qr_codes'])->first());
    //return Particulier::with(['client', 'qr_codes'])->first()->toJson(); //toArray(), toJson()

    /*$users = ServiceInit::userDao()->all();
    $response = APIHelpers::apiResponseFormat(false, 200, '', $users);
    return Response::json($response);
    //$data = [1, 2, 3, 4, 5];
    //dd(end($data));
    $conf = config('config');
    //dd(end($conf['type']));
    $td = ServiceInit::typeDao();
    $tc = ServiceInit::clientDao();

    //dd($tc->get(1), $td->get(1));

    $pp = \App\Models\Entities\Paiement::find(1);
    return response()->json($pp);
    foreach ($pp->particulier as $role) {
        //echo $role->pivot->created_at;
        dump($role->pivot);
    }

    dd($pp);*/



    //dump(Particulier::find(1)->identifiant);
    //dump(Particulier::find(2)->identifiant);
    /*$code = QRCode::find(1);
    dd($code->particulier);
    $code0 = DB::table('q_r_codes')->first();
    $code1 = DB::table('q_r_codes')->where('id','=',1)->get();

    //Log::info($code0);
    $t = QRCode::select('*')
        ->where([
            ['id','=',2]
        ])
        ->get();
    //dd($t[0]); == dd($t->first()->paiement);

    dump($t);
    $z = $t[0]->update([
        'use' => true,
        'montant' => 150,
    ]);
    dd($t, $z);
    dd(QRCode::all()
        ->where('use','=',false)
        ->where('montant','>',100)
    );
    //dd($code, $code->paiement);
    die();
    //return view('welcome');*/

    $transaction = DB::transaction(function () {
        $user = User::create([
            'cin' => 'CIN0123',
            'nom' => 'ABIR',
            'prenom' => 'Mariel Evha',
            'profil' => 'particular',
            'email' => 'evenma.org@gmail.com',
            'tel' => '+21200000000',
            'password' => Hash::make('root'),
            'ville' => 'Casablanca',
            'adresse' => 'Maarif Casablanca',
            'activer' => false,
            'url_carte' => 'link_file',
            'pays_id' => 1,
            //'confirmation_token' => true, //str_replace('/', '', bcrypt(Str::random(16))),
        ]);
        Particulier::create([
            'identifiant' => rand(100000, 999999),
            'profil' => 'customer',
            'solde' => 1000,
            'solde_erreur' => 0,
            'digit_code' => rand(100000, 999999),
            'depot' => true,
            'retrait' => true,
            'paiement' => true,
            'generation_qr' => true,
            'transfert_national' => true,
            'transfert_international' => true,
            'user_id' => 2,
        ]);
    });
    dd($transaction);
});
