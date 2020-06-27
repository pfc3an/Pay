<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFraisTransfertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frais_transferts', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->double('min');
            $table->double('max');
            $table->double('frais');
            $table->boolean('activer')->default(true);
            $table->foreignId('pays_id');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frais_transferts');
    }
}
