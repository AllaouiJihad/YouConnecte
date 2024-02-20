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
        Schema::create('followes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_auth');
            $table->unsignedBigInteger('user_follower');
            $table->foreign('user_auth')->references('id')->on('users');
            $table->foreign('user_follower')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('followes');
    }
};
