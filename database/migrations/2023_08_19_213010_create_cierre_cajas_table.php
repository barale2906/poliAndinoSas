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
        Schema::create('cierre_cajas', function (Blueprint $table) {
            $table->comment('Detalles de los cierres de caja');
            $table->id();
            $table->time('fecha_cierre')->comment('Fecha del cierre');
            $table->double('valor_total')->comment('Valor total del cierre');
            $table->longtext('observaciones')->comment('Obserevaciones al cierre');

            $table->double('valor_pensiones')->default(0)->comment('Valor total del cierre');
            $table->double('valor_efectivo')->default(0)->comment('Valor recibido en efectivo');
            $table->double('valor_tarjeta')->default(0)->comment('Valor recibido en tarjetas credito y debito');
            $table->double('valor_cheque')->default(0)->comment('Valor recibido en cheques');
            $table->double('valor_consignación')->default(0)->comment('Valor recibido en transferencias consignaciones');

            $table->double('valor_herramientas')->default(0)->comment('Valor total del cierre por herramienta');
            $table->double('valor_efectivo_h')->default(0)->comment('Valor recibido en efectivo por herramienta');
            $table->double('valor_tarjeta_h')->default(0)->comment('Valor recibido en tarjetas credito y debito por herramienta');
            $table->double('valor_cheque_h')->default(0)->comment('Valor recibido en cheques por herramienta');
            $table->double('valor_consignación_h')->default(0)->comment('Valor recibido en transferencias consignaciones por herramienta');

            $table->integer('status')->default(0)->comment('0 Precierre, 1 Cierre');

            $table->unsignedBigInteger('sede_id');
            $table->foreign('sede_id')->references('id')->on('sedes');

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
        Schema::dropIfExists('cierre_cajas');
    }
};
