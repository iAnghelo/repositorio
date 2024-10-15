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
            $table->integer('id')->primary();
            $table->string('titulo',200);
            $table->longText(column: 'resumen');
            $table->text('autores');
            $table->date('fecha_emision');
            $table->year(column: 'year_creacion');
            $table->string('ruta',250);
            $table->string('estado',45);
            $table->string('tipo_acceso',45);
            $table->string('tipo_informe',60);
            $table->timestamps();
        });

        Schema::create('tipo_informe', function (Blueprint $table) {
            $table->id();
            $table->string('tipo',60);
            $table->timestamps();
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
