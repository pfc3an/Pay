<?php

use App\Models\Entities\PaiementParticulier;
use App\Models\Entities\Particulier;
use App\Models\Entities\QRCode;
use App\Services\ServiceInit;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
    dd($date, $date1);
    return view('welcome');
});
Route::get('test', function () {
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

    dd($pp);


    /*DB::transaction(function () {
        DB::table('users')->update(['votes' => 1]);
        DB::table('posts')->delete();
    }, 2);*/


    //dump(Particulier::find(1)->identifiant);
    //dump(Particulier::find(2)->identifiant);
    $code = QRCode::find(1);
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
    //return view('welcome');
});
