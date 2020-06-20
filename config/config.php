<?php

return $config = [
    'agence' => [
        0 => \App\Models\Dao\Methods\TypeDao::class,
    ],
    'caissier' => [
        0 => \App\Models\Dao\Methods\CaissierDaoDao::class,
    ],
    'client' => [
        0 => \App\Models\Dao\Methods\ClientDao::class
    ],
    'commercant' => [
        0 => \App\Models\Dao\Methods\CommercantDao::class
    ],
    'demande' => [
        0 => \App\Models\Dao\Methods\DemandeDao::class,
    ],
    'depot' => [
        0 => \App\Models\Dao\Methods\DepotDaoDao::class,
    ],
    'facture' => [
        0 => \App\Models\Dao\Methods\FactureDao::class,
    ],
    'historicPC' => [
        0 => \App\Models\Dao\Methods\HistoriquePlafondCommercantDao::class,
    ],
    'historicSC' => [
        0 => \App\Models\Dao\Methods\HistoriqueSousCompteDao::class,
    ],
    'initTransfert' => [
        0 => \App\Models\Dao\Methods\InitiationTransfertDao::class,
    ],
    'paiement' => [
        0 => \App\Models\Dao\Methods\PaiemenDao::class,
    ],
    'paiementParticulier' => [
        0 => \App\Models\Dao\Methods\PaiementParticulierDao::class,
    ],
    'particulier' => [
        0 => \App\Models\Dao\Methods\ParticulierDao::class,
    ],
    'qrCode' => [
        0 => \App\Models\Dao\Methods\QRCodeDao::class,
    ],
    'rectification' => [
        0 => \App\Models\Dao\Methods\RectificationDao::class,
    ],
    'retrait' => [
        0 => \App\Models\Dao\Methods\RetraitDaoDao::class,
    ],
    'sousCompte' => [
        0 => \App\Models\Dao\Methods\SousCompteDao::class,
    ],
    'transfert' => [
        0 => \App\Models\Dao\Methods\TransfertDao::class,
    ],
    'type' => [
        0 => \App\Models\Dao\Methods\TypeDao::class,
    ],
    'user' => [
        0 => \App\Models\Dao\Methods\UserDao::class,
    ],
];

