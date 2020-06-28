<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriqueParametresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique_parametres', function (Blueprint $table) {
            $table->id();
            $table->string('parametre');
            $table->string('action');
            $table->dateTime('date');
            $table->foreignId('parametre_id');
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
        Schema::dropIfExists('historique_parametres');
    }
}
