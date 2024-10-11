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
        Schema::create('informe', function (Blueprint $table) {
            $table->integer('codigo')->primary();
            $table->string('nombre',200);
            $table->longText(column: 'resumen');
            $table->text('autores');
            $table->date('fecha_creacion');
            $table->year(column: 'ano_creacion');
            $table->string('ruta',250);
            $table->string('estado',45);
            $table->string('tipo_acceso',45);
            $table->string('tipo_informe',60);
        });

        Schema::create('tipo_informe', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_informe',60);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informe');
        Schema::dropIfExists('tipo_informe');
    }
};
