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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->enum("type", ['Basic', 'Standard', 'Premium']);
            $table->string("title", 100);
            $table->text("description");
            $table->integer("delevery_time")->unsigned();
            $table->integer("revision")->unsigned();
            $table->integer("prix")->unsigned();
            $table->integer("extra_delevery_time")->nullable();
            $table->integer("extra_delevery_prix")->nullable();
            $table->integer("extra_revision_time")->nullable();
            $table->integer("extra_revision_prix")->nullable();
            $table->foreignId('services_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
