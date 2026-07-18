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
        Schema::create('competencia_tipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('descripcion')->nullable();
            $table->timestamps();
        });

        Schema::create('competencia_generos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('descripcion')->nullable();
            $table->tinyInteger('estatus')->default(1)->comment('0 Inactivo,1 Activo');
            $table->timestamps();
        });

        Schema::create('competencia_categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('descripcion')->nullable();
            $table->unsignedTinyInteger('edad_minima')->nullable();
            $table->unsignedTinyInteger('edad_maxima')->nullable();
            $table->tinyInteger('estatus')->default(1)->comment('0 Inactivo,1 Activo');
            $table->timestamps();
        });

        Schema::create('competencia_divisiones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('descripcion')->nullable();
            $table->tinyInteger('estatus')->default(1)->comment('0 Inactivo,1 Activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competencia_divisiones');
        Schema::dropIfExists('competencia_categorias');
        Schema::dropIfExists('competencia_generos');
        Schema::dropIfExists('competencia_tipos');
    }
};
