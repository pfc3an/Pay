<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
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
        User::create([
            'cin' => 'CIN06723',
            'nom' => 'ISSAKA',
            'prenom' => 'Amadou',
            'profil' => 'admin',
            'email' => 'pay0@gmail.com',
            'tel' => '+21200000000',
            'password' => Hash::make('root'),
            'ville' => 'Casablanca',
            'adresse' => 'Maarif Casablanca',
            'activer' => false,
            'url_carte' => 'link_file',
            'pays_id' => 1,
            //'confirmation_token' => true, //str_replace('/', '', bcrypt(Str::random(16))),
        ]);
        User::create([
            'cin' => 'CIN0231',
            'nom' => 'THIAM',
            'prenom' => 'El Hadj',
            'profil' => 'particular',
            'email' => 'pay1@gmail.com',
            'tel' => '+21200000000',
            'password' => Hash::make('root'),
            'ville' => 'Casablanca',
            'adresse' => 'Maarif Casablanca',
            'activer' => false,
            'url_carte' => 'link_file',
            'pays_id' => 2,
            //'confirmation_token' => true, //str_replace('/', '', bcrypt(Str::random(16))),
        ]);
        User::create([
            'cin' => 'CIN00013',
            'nom' => 'TOURE',
            'prenom' => 'Ibrahim',
            'profil' => 'cashier',
            'email' => 'pay2@gmail.com',
            'tel' => '+21200000000',
            'password' => Hash::make('root'),
            'ville' => 'Casablanca',
            'adresse' => 'Maarif Casablanca',
            'activer' => false,
            'url_carte' => 'link_file',
            'pays_id' => 3,
            //'confirmation_token' => true, //str_replace('/', '', bcrypt(Str::random(16))),
        ]);
        User::create([
            'cin' => 'CIN10023',
            'nom' => 'MALADO',
            'prenom' => 'Diallo',
            'profil' => 'particular',
            'email' => 'pay3@gmail.com',
            'tel' => '+21200000000',
            'password' => Hash::make('root'),
            'ville' => 'Casablanca',
            'adresse' => 'Maarif Casablanca',
            'activer' => false,
            'url_carte' => 'link_file',
            'pays_id' => 2,
            //'confirmation_token' => true, //str_replace('/', '', bcrypt(Str::random(16))),
        ]);
    }
}
