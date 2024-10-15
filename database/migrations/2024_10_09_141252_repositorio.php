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


        Schema::create('tipo_informe', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60);
            $table->timestamps();
        });

        Schema::create('informe', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 200);
            $table->longText('resumen');
            $table->text('autores');
            $table->year('anio');
            $table->string('ruta', 250);
            $table->string('estado', 45);
            $table->string('acceso', 45);
            $table->foreignId('tipo_informe_id')->constrained('tipo_informe')->onDelete('cascade');
            $table->foreignId('carrera_id')->constrained('carrera')->onDelete('cascade');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('carrera');
        Schema::dropIfExists('tipo_informe');
        Schema::dropIfExists('informe');
    }
};
