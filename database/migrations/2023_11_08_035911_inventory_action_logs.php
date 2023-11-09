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
        Schema::create('inventory_action_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Below is what are included in logger
            // you will know what it means later
            $table->longText('message');
            $table->longText('context');
            $table->string('level')->index();
            $table->string('level_name');
            $table->string('channel')->index();
            $table->string('record_datetonz
            ime');
            $table->longText('extra');
            $table->longText('formatted');
            $table->unsignedBigInteger('action_by');
            // Additional custom fields I added
            $table->string('remote_addr')->nullable();
            $table->string('user_agent')->nullable();
            $table->dateTime('created_at')->nullable();
            // As you can see, I comment this out, because I don't need
            // updated_at
            // $table->timestamps();

            $table->foreign('action_by')->references('id')->on('users');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_action_logs');
    }
};
