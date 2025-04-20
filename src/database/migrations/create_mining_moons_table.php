<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiningMoonsTable extends Migration
{
    public function up()
    {
        Schema::create('mining_moons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('corporation_id');
            $table->json('ore_composition');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mining_moons');
    }
}
