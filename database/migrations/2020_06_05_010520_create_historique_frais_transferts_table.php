<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriqueFraisTransfertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique_frais_transferts', function (Blueprint $table) {
            $table->id();
            $table->string('champ_update');
            $table->double('last_valeur');
            $table->double('new_valeur');
            $table->dateTime('date');
            $table->foreignId('frais_transfert_id');
            $table->foreignId('administrateur_id');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historique_frais_transferts');
    }
}
