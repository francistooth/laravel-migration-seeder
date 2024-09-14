<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('type', 50);
            $table->string('departure_station', 70);
            $table->string('arrival_station', 70);
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->string('train_code', 70);
            $table->integer('car_number')->unsigned();
            $table->boolean('in_time');
            $table->boolean('canceled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
