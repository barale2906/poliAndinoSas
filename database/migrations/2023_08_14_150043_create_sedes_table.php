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
        Schema::create('sedes', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();
            $table->string('address');
            $table->string('phone');
            $table->string('nit');
            $table->string('portfolio_assistant_name');
            $table->string('portfolio_assistant_phone');
            $table->string('portfolio_assistant_email');
            $table->time('start');
            $table->time('finish');
            $table->integer('status')->default(1); // 0 Inactivo, 1 activo

            $table->unsignedBigInteger('sector_id');
            $table->foreign('sector_id')->references('id')->on('sectors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sedes');
    }
};
