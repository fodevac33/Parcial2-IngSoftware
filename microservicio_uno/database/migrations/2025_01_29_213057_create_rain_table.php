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
        Schema::create('rain', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('duration_minutes');
            $table->integer('city_id')->references('id')->on('cities');
            $table->integer('amount_mm');
            $table->boolean('zone_in_risk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lluvias');
    }
};
