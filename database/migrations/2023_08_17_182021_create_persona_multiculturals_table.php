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
        Schema::create('persona_multiculturals', function (Blueprint $table) {
            $table->comment('Tipos de personas multiculturales');
            $table->id();
            $table->string('name')->comment('nombre del tipo de persona multicultural');
            $table->integer('status')->default(1)->comment('0 Inactivo, 1 activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona_multiculturals');
    }
};
