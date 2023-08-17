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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->comment('Descripción de movimientos de inventario');
            $table->id();
            $table->integer('tipo')->default(1)->comment('tipo de movimiento, 1 entra 2 sale');
            $table->date('fecha_movimiento');
            $table->double('cantidad');
            $table->double('saldo')->comment('Suma algebraica de las cantidades luego de este registro');
            $table->longText('descripcion');

            $table->unsignedBigInteger('almacen_id');
            $table->foreign('almacen_id')->references('id')->on('almacens');

            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
