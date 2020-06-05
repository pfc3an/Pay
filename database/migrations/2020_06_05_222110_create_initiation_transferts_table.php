<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitiationTransfertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initiation_transferts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_destinataire');
            $table->double('montant');
            $table->string('tel');
            $table->float('taux');
            $table->float('frais');
            $table->string('devise');
            $table->dateTime('date');
            $table->string('code_initiation');
            $table->boolean('recuperer')->default(false);
            $table->foreignId('particulier_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('initiation_transferts');
    }
}
