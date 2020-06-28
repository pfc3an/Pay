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
            $table->foreign('depot_id')->references('id')->on('depots')->onDelete('cascade');
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

          //Monaie in Pays 
          Schema::table('pays', function (Blueprint $table){
            $table->foreign('monaie_id')->references('id')->on('monaies')->onDelete('cascade');
        });

        //Pays in Parametre
        Schema::table('parametres', function (Blueprint $table){
            $table->foreign('pays_id')->references('id')->on('pays')->onDelete('cascade');
        });

         // Parametre & Administrateur in historique_parametres
        Schema::table('historique_parametres', function (Blueprint $table){
            $table->foreign('parametre_id') ->references('id')->on('parametres')->onDelete('cascade');
            $table->foreign('administrateur_id') ->references('id')->on('administrateurs')->onDelete('cascade');  
        });

        /*devise et historique pas do
        **
        */

        //Pays in frais_transferts
        Schema::table('frais_transferts', function (Blueprint $table){
            $table->foreign('pays_id')->references('id')->on('pays')->onDelete('cascade');
        });

        //frais_transferts et administrateur in historique_frais_transferts
        Schema::table('historique_frais_transferts', function (Blueprint $table){
            $table->foreign('frais_transfert_id') ->references('id')->on('frais_transferts')->onDelete('cascade');
            $table->foreign('administrateur_id') ->references('id')->on('administrateurs')->onDelete('cascade');
        });

        //User & type_administrateurs in administrateur
        Schema::table('administrateurs', function (Blueprint $table){
         // $table->foreign('user_id') ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('type_administrateur_id') ->references('id')->on('type_administrateurs')->onDelete('cascade');
        });

        /*historique administrateur
        **
        */

        //Administrateur & Role in AdministrateurRole
        Schema::table('administrateur_roles', function (Blueprint $table){
            $table->foreign('role_id') ->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('administrateur_id') ->references('id')->on('administrateurs')->onDelete('cascade');
        });

        //Role & Administrateur & AdminReceve in historique_roles
        Schema::table('historique_roles', function (Blueprint $table){
            $table->foreign('role_id') ->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('administrateur_id') ->references('id')->on('administrateurs')->onDelete('cascade');
            $table->foreign('administrateur_receive') ->references('id')->on('administrateurs')->onDelete('cascade');
        });

        //type_Administrateur & Role in type_roles
        Schema::table('type_roles', function (Blueprint $table){
            $table->foreign('role_id') ->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('type_administrateur_id') ->references('id')->on('type_administrateurs')->onDelete('cascade');
        });

        // Administrateur & type_Administrateur & Role in historique_type_roles
        Schema::table('historique_type_roles', function (Blueprint $table){
            $table->foreign('role_id') ->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('administrateur_id') ->references('id')->on('administrateurs')->onDelete('cascade');
            $table->foreign('type_administrateur_id') ->references('id')->on('type_administrateurs')->onDelete('cascade');
        });

        //Role in notifications
        Schema::table('notifications', function (Blueprint $table){
            $table->foreign('role_id') ->references('id')->on('roles')->onDelete('cascade');
        });
        
        //Notification & administrateur in TraitementNotifications
        Schema::table('traitement_notifications', function (Blueprint $table){
            $table->foreign('notification_id') ->references('id')->on('notifications');
            $table->foreign('administrateur_id') ->references('id')->on('administrateurs');
        });
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
