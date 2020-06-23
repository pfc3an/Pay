<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('cin');
            $table->string('nom');
            $table->string('prenom');
            $table->string('profil');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('tel');
            $table->string('ville');
            $table->string('adresse');
            $table->string('url_carte');
            $table->boolean('activer')->default(false);
            $table->foreignId('pays_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
