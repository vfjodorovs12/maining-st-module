<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiningDebugLogsTable extends Migration
{
    public function up()
    {
        Schema::create('mining_debug_logs', function (Blueprint $table) {
            $table->id();
            $table->string('context');
            $table->text('message');
            $table->json('data')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mining_debug_logs');
    }
}
