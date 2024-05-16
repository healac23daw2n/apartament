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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('Dni_client', 20)->primary();
            $table->string('Nom_i_cognoms', 100);
            $table->integer('Edat');
            $table->string('Telèfon', 15);
            $table->string('Adreça', 100);
            $table->string('Ciutat', 50);
            $table->string('País', 50);
            $table->string('Email', 100);
            $table->string('Tipus_de_targeta', 20);
            $table->string('Número_de_la_targeta', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
