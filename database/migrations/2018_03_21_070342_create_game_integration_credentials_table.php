<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameIntegrationCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_integration_credentials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_integration_id')->unsigned();
            $table->string('key');
            $table->string('value');
            $table->timestamps();

            $table->foreign('game_integration_id')->references('id')->on('game_integrations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_integration_credentials');
    }
}
