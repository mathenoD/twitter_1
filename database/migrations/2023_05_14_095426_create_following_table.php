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
        Schema::create('following', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('follower_id');
            // $table->integer('followed_id');
            $table->foreignId('follower_id')->references('id')->on('users');
            $table->foreignId('followed_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('following');
    }
};
