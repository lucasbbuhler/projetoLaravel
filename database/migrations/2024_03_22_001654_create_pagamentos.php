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
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_reserva");
            $table->string('metodo_de_pagamento');
            $table->timestamp('data_de_pagamento')->nullable();
            $table->timestamps();

            $table->foreign('id_reserva')->references('id')->on('reservas');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagamentos');
    }
};
