<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiningRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('mining_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id');
            $table->unsignedBigInteger('moon_id');
            $table->string('ore_type');
            $table->decimal('quantity', 20, 2);
            $table->decimal('refined_quantity', 20, 2)->nullable();
            $table->decimal('waste', 20, 2)->nullable();
            $table->timestamp('mined_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mining_records');
    }
}
