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
        Schema::create('reservas', function (Blueprint $table) {
            $table->string('Dni_client');
            $table->string('Codi_unic_apartament');
            $table->date('Data_inici_lloguer');
            $table->time('Hora_inici_lloguer');
            $table->date('Data_finalitzacio_lloguer');
            $table->time('Hora_finalitzacio_lloguer');
            $table->string('Lloc_lliurament_claus');
            $table->string('Lloc_devolucio_claus');
            $table->float('Preu_per_dia');
            $table->boolean('Diposit');
            $table->float('Quantitat_diposit');
            $table->enum('Tipus_asseguranca', ['Franquicia_fins_1000_Euros', 'Franquicia_fins_500_Euros', 'Sense_franquicia']);
            $table->timestamps();
            
            $table->primary(['Dni_client', 'Codi_unic_apartament']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
