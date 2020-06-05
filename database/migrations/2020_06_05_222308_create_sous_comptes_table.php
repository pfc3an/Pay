<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSousComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_comptes', function (Blueprint $table) {
            $table->id();
            $table->string('pass');
            $table->boolean('activer')->default(false);
            $table->dateTime('date_activation')->nullable();
            $table->foreignId('client_id');
            $table->foreignId('commercant_id');
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
        Schema::dropIfExists('sous_comptes');
    }
}
