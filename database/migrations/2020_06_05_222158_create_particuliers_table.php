<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticuliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('particuliers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('identifiant');
            $table->string('profil');
            $table->double('solde');
            $table->double('solde_erreur')->default(0);
            $table->integer('digit_code');
            $table->boolean('retrait');
            $table->boolean('depot');
            $table->boolean('transfert_national');
            $table->boolean('transfert_international');
            $table->boolean('paiement');
            //$table->boolean('use_critical');
            $table->boolean('generation_qr');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('particuliers');
    }
}
