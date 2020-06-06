<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paiements', function (Blueprint $table){
            $table->foreign('qr_code_id')->references('id')->on('q_r_codes')->onDelete('cascade');
        });
        Schema::table('paiement_particuliers', function (Blueprint $table){
            $table->foreign('paiement_id')->references('id')->on('paiements')->onDelete('cascade');
            $table->foreign('particulier_id')->references('id')->on('particuliers')->onDelete('cascade');
        });
        Schema::table('particuliers', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('q_r_codes', function (Blueprint $table){
            $table->foreign('particulier_id')->references('id')->on('particuliers')->onDelete('cascade');
        });
        Schema::table('clients', function (Blueprint $table){
            $table->foreign('particulier_id')->references('id')->on('particuliers')->onDelete('cascade');
        });
        Schema::table('commercants', function (Blueprint $table){
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('particulier_id')->references('id')->on('particuliers')->onDelete('cascade');
        });
        Schema::table('factures', function (Blueprint $table){
            $table->foreign('commercant_id')->references('id')->on('commercants')->onDelete('cascade');
        });
        Schema::table('sous_comptes', function (Blueprint $table){
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('commercant_id')->references('id')->on('commercants')->onDelete('cascade');
        });
        Schema::table('demandes', function (Blueprint $table){
            $table->foreign('client_to')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('client_from')->references('id')->on('clients')->onDelete('cascade');
        });
        Schema::table('transferts', function (Blueprint $table){
            $table->foreign('particulier_id')->references('id')->on('particuliers')->onDelete('cascade');
            $table->foreign('initiation_transfert_id')->references('id')->on('initiation_transferts')->onDelete('cascade');
        });
        Schema::table('initiation_transferts', function (Blueprint $table){
            $table->foreign('particulier_id')->references('id')->on('particuliers')->onDelete('cascade');
        });
        Schema::table('historique_plafond_commercants', function (Blueprint $table){
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            //$table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        });
        Schema::table('historique_sous_comptes', function (Blueprint $table){
            $table->foreign('sous_compte_id')->references('id')->on('sous_comptes')->onDelete('cascade');
        });
        Schema::table('caissiers', function (Blueprint $table){
            $table->foreign('agence_id')->references('id')->on('agences')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('rectification_depots', function (Blueprint $table){
            $table->foreign('caissier_id')->references('id')->on('caissiers')->onDelete('cascade');
        });
        Schema::table('depots', function (Blueprint $table){
            $table->foreign('caissier_id')->references('id')->on('caissiers')->onDelete('cascade');
            $table->foreign('particulier_id')->references('id')->on('particuliers')->onDelete('cascade');
        });
        Schema::table('retraits', function (Blueprint $table){
            $table->foreign('caissier_id')->references('id')->on('caissiers')->onDelete('cascade');
            $table->foreign('particulier_id')->references('id')->on('particuliers')->onDelete('cascade');
        });
        /*Schema::table('users', function (Blueprint $table){
            $table->foreign('pays_id')->references('id')->on('pays')->onDelete('cascade');
        });
        Schema::table('types', function (Blueprint $table){
            $table->foreign('pays_id')->references('id')->on('pays')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
