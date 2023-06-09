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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyer_id')->constrained('user_buyer_sellers');
            $table->foreignId('services_id')->constrained();
            $table->integer("prix")->unsigned();
            $table->integer("quantite")->unsigned();
            $table->integer("delevrey_time");
            $table->enum("status", ['active', 'completed', 'cancelled']);
            $table->integer("feedback_stars")->nullable();
            $table->text("feedback_text")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
