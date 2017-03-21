<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExternalProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('expcode')->unique();
            $table->string('expname');
            $table->string('pic');
            $table->string('phone');
            $table->string('email');
            $table->string('maps');
            $table->string('address');
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
        Schema::dropIfExists('external_providers');
    }
}
