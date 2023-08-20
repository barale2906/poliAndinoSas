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
        Schema::create('cartera_recibo_pago', function (Blueprint $table) {
            $table->comment('Recibos de caja por pagos de cartera');
            $table->id();

            $table->unsignedBigInteger('cartera_id');
            $table->foreign('cartera_id')->references('id')->on('carteras');

            $table->unsignedBigInteger('recibo_pago_id');
            $table->foreign('recibo_pago_id')->references('id')->on('recibo_pagos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartera_recibo_pago');
    }
};
