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
        Schema::create('profil_entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email')->unique();
            $table->string('telephone')->nullable();
            $table->string('site_web')->nullable();
            $table->string('logo')->nullable();
            $table->text('description')->nullable();
            $table->string('secteur_activite')->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('pays')->default('Sénégal');
            $table->integer('taille')->nullable();
            $table->string('responsable')->nullable();
            $table->string('linkedin')->nullable();
            $table->boolean('actif')->default(true);

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
        Schema::dropIfExists('profil_entreprises');
    }
};
