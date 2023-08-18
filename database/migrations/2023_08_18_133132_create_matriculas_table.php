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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->comment('Matricula de estudiantes para cada curso');
            $table->id();
            $table->string('medio')->comment('Como se enteraron del curso');
            $table->string('nivel')->comment('Nivel de conocimiento sobre el tema');
            $table->string('anula')->nullable()->comment('Motivo de anulación si se presenta');
            $table->string('anula_user')->nullable()->comment('Nombre de quienanula si se presenta');
            $table->double('valor')->comment('Valor del curso pactado');
            $table->string('metodo')->comment('método de pago elegido');
            $table->integer('status')->default(1)->comment('0 Inactivo, 1 activo');


            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
