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
        Schema::create('divisiones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('descripcion')->nullable();
            $table->timestamps();
        });

        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('descripcion')->nullable();

            $table->integer('edad_minima')->nullable();
            $table->integer('edad_maxima')->nullable();

            $table->tinyInteger('estatus')->default(0)->comment('0=Pendiente, 1=Activa, 2=Suspendida, 3=Finalizada, 4=Cancelada');

            $table->timestamps();
        });

        Schema::create('tipos_competencia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->timestamps();
        });

        Schema::create('competencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->text('descripcion')->nullable();

            $table->foreignId('tipo_id')->constrained('tipos_competencia')->onDelete('cascade');
            $table->foreignId('division_id')->constrained('divisiones')->onDelete('cascade');
            $table->foreignId('administrador_id')->constrained('users')->onDelete('cascade');
            
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();

            $table->tinyInteger('estatus')->default(0)->comment('0=Pendiente, 1=Activa, 2=Suspendida, 3=Finalizada, 4=Cancelada');

            $table->timestamps();
        });

        Schema::create('dias_competencia', function (Blueprint $table) {
            $table->id();
            
            $table->tinyInteger('dia')->comment('1=Lunes, 2=Martes, 3=Miercoles, 4=Jueves, 5=Viernes, 6=Sabado, 7=Domingo');
            $table->foreignId('competencia_id')->constrained('competencias')->onDelete('cascade');
            
            $table->timestamps();
        });

        Schema::create('categorias_competencia', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->foreignId('competencia_id')->constrained('competencias')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_competencia');
        Schema::dropIfExists('competencias');
        Schema::dropIfExists('tipos_competencia');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('divisiones');
    }
};
