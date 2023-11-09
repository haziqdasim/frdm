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
        Schema::table('inventories', function(Blueprint $table){
            $table->unsignedBigInteger('firetruck_id')->nullable()->change();
            $table->string('rfid_no')->nullable()->change();
            $table->string('photo_path')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventories', function(Blueprint $table){
            $table->unsignedBigInteger('firetruck_id')->nullable(false)->change();
            $table->string('rfid_no')->nullable(false)->change();
            $table->string('photo_path')->nullable(false)->change();
        });
    }
};
