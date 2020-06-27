<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametres', function (Blueprint $table) {
            $table->id();
            $table->boolean('retrait')->default(false);
            $table->boolean('depot')->default(false);
            $table->boolean('transfert_national')->default(false);
            $table->boolean('transfert_international')->default(false);
            $table->boolean('paiement')->default(false);
            $table->boolean('generation_qr')->default(false);
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
        Schema::dropIfExists('parametres');
    }
}
