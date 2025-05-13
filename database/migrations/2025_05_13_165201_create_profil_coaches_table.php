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
        Schema::create('profil_coaches', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('email')->unique();
            $table->string('telephone')->nullable();
            $table->text('adresse')->nullable();
            $table->date('date_naissance')->nullable();
            $table->enum('sexe', ['Homme', 'Femme', 'Autre'])->nullable();
            $table->string('photo')->nullable(); 
            $table->string('specialite')->nullable(); 
            $table->text('biographie')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('site_web')->nullable();
            $table->boolean('disponible')->default(true); 

            $table->foreignId('user_id')->constrained()->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_coaches');
    }
};
