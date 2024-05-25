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
        Schema::create('moteurs', function (Blueprint $table) {
            $table->id();
            $table->integer('puissance');
            $table->string('model');
            $table->unsignedBigInteger('voiture_id');
            $table->foreign('voiture_id')->references('id')->on('voitures')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moteurs');
    }
};
