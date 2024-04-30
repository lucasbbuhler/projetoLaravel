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
            $table->id();
            $table->unsignedBigInteger("id_quadra");
            $table->string("responsavel");
            $table->timestamp('data_da_reserva')->nullable();
            $table->integer("valor_da_reserva");
            $table->timestamps();

            $table->foreign('id_quadra')->references('id')->on('quadras');
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
