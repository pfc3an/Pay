<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriqueRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique_roles', function (Blueprint $table) {
            $table->id();
            $table->string('action');
            $table->dateTime('date');
            $table->foreignId('administrateur_id');
            $table->foreignId('administrateur_receive');
            $table->foreignId('role_id');
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
        Schema::dropIfExists('historique_roles');
    }
}
