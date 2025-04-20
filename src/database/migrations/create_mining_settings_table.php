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
            $table->unsignedBigInteger('corporation_id');
            $table->json('tax_rates');
            $table->decimal('refining_efficiency', 5, 2);
            $table->boolean('debug_mode')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mining_settings');
    }
}
