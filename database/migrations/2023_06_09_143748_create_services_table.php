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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string("titre", 100);
            $table->string("tags", 100);
            $table->text("description");
            $table->integer("clicks");
            $table->integer("orders");
            $table->enum("state", ['active', 'paused', 'draft']);
            $table->foreignId('sub_categories_id')->constrained();
            $table->foreignId('user_buyer_sellers_id')->constrained('user_buyer_sellers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
