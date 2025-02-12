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
        Schema::create('fires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cause');
            $table->integer('city_id')->references('id')->on('cities');
            $table->float('affected_area_km');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incendios');
    }
};