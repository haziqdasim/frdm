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
        Schema::create('firetrucks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('station_id');
            $table->string('registration_no');
            $table->string('model_type');
            $table->string('photo_path')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('firetrucks');
    }
};
