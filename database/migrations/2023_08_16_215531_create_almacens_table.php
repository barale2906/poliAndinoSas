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
        Schema::create('almacens', function (Blueprint $table) {
            $table->comment('Detalle de los almacenes');
            $table->id();
            $table->string('name')->unique()->comment('nombre del almacen');
            $table->integer('status')->default(1)->comment('0 Inactivo, 1 activo');

            $table->unsignedBigInteger('sede_id');
            $table->foreign('sede_id')->references('id')->on('sedes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('almacens');
    }
};
