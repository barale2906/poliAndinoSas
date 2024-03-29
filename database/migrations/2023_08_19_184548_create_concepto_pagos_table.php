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
        Schema::create('concepto_pagos', function (Blueprint $table) {
            $table->comment('Descripción de los conceptos de pago generados');
            $table->id();
            $table->string('name')->comment('nombre del concepto de pago configurado');
            $table->integer('status')->default(1)->comment('0 Inactivo, 1 activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concepto_pagos');
    }
};
