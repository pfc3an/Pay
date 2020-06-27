<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriqueTypeRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique_type_roles', function (Blueprint $table) {
            $table->id();
            $table->string('action');
            $table->dateTime('date');
            $table->foreignId('administrateur_id');
            $table->foreignId('role_id');
            $table->foreignId('type_administrateur_id');
          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historique_type_roles');
    }
}
