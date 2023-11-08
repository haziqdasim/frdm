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
        Schema::create('firetruck_to_firefighters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('firetruck_id');
            $table->unsignedBigInteger('firefighter_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('firetruck_to_firefighters');
    }
};
