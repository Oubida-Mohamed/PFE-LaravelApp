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
        Schema::create('user_buyer_sellers', function (Blueprint $table) {
            $table->id();
            $table->string("name", 60);
            $table->string("email", 45)->unique();
            $table->string("password", 150);
            $table->boolean('is_seller')->default(false);
            $table->enum("role", ['buyer', 'seller'])->default('buyer');
            $table->text("description")->nullable();
            $table->enum("status", ['online', 'offline'])->nullable();
            $table->enum("sexe", ['M', 'F'])->nullable();
            $table->string("city", 45)->nullable();
            $table->enum("languges", ["arabic", "french", "english"])->nullable();
            $table->binary("photo_profil")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_buyer_sellers');
    }
};
