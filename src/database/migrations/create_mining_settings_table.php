<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiningSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('mining_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('corporation_id')->nullable();
            $table->decimal('refining_efficiency', 5, 2)->default(0.75);
            $table->json('tax_rates')->nullable();
            $table->boolean('debug_mode')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mining_settings');
    }
}
