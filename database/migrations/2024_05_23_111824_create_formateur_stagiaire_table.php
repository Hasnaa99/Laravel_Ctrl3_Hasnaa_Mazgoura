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
        Schema::create('formateur_stagiaire', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stagiaire_id');
            $table->unsignedBigInteger('formateur_id');
            $table->unique(['stagiaire_id', 'formateur_id']);
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires')->onDelete('cascade');
            $table->foreign('formateur_id')->references('id')->on('formateurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formateur_stagiaire');
    }
};
