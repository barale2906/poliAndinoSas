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
        Schema::create('asistencia_detalles', function (Blueprint $table) {
            $table->comment('Detalle de los asistentes a la clase');
            $table->id();
            $table->string('asistio')->default('no')->comment('REgistro de asistencia a la clase');
            $table->string('estado')->comment('Estado de actividad del estudiante a la fecha de esta clase');
            $table->string('estado_cartera')->comment('Estado de cartera del estudiante a la fecha de esta clase');


            $table->unsignedBigInteger('asistencia_id');
            $table->foreign('asistencia_id')->references('id')->on('asistencias');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencia_detalles');
    }
};
