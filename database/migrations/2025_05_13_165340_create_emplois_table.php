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
        Schema::create('emplois', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->text('description'); 
            $table->string('lieu')->nullable(); 
            $table->string('secteur_activite'); 
            $table->string('type_contrat')->default('CDD'); 
            $table->string('niveau_experience')->nullable(); 
            $table->string('niveau_etude')->nullable(); 
            $table->dateTime('date_debut')->nullable(); 
            $table->dateTime('date_fin'); 
            $table->string('fiche_poste')->nullable();

            $table->boolean('active')->default(true); 
            $table->foreignId('profil_entreprise_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emplois');
    }
};
