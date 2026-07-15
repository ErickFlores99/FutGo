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
            $table->string('nombre',100)->unique();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });

        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100)->unique();
            $table->text('descripcion')->nullable();
            $table->unsignedSmallInteger('edad_minima')->nullable();
            $table->unsignedSmallInteger('edad_maxima')->nullable();
            $table->timestamps();
        });

        Schema::create('tipos_competencia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->timestamps();
        });

        Schema::create('competencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100)->unique();
            $table->text('descripcion')->nullable();
            $table->year('temporada');

            $table->foreignId('tipo_id')
                ->constrained('tipo_competencias')
                ->cascadeOnDelete();

            $table->foreignId('administrador_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->date('fecha_inicio');
            $table->date('fecha_fin');

            $table->boolean('es_nocturna')->default(false);

            $table->tinyInteger('estatus')
                ->default(0)
                ->comment('0 Pendiente, 1 Activa, 2 Suspendida, 3 Finalizada, 4 Cancelada');
            $table->timestamps();

            $table->unique([
                'nombre',
                'temporada'
            ]);
        });

        Schema::create('dias_competencia', function (Blueprint $table) {
            $table->id();

            $table->foreignId('competencia_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->tinyInteger('dia')
                ->comment('1=Lunes,2=Martes,...,7=Domingo');

            $table->timestamps();

            $table->unique([
                'competencia_id',
                'dia'
            ]);
        });

       Schema::create('categorias_competencia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('competencia_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('categoria_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique([
                'competencia_id',
                'categoria_id'
            ]);
        });

        Schema::create('divisiones_categoria_competencia', function (Blueprint $table) {
            $table->id();

            $table->foreignId('categoria_competencia_id')
                ->constrained('categorias_competencia')
                ->cascadeOnDelete();

            $table->foreignId('division_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique([
                'categoria_competencia_id',
                'division_id'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divisiones_categoria_competencia');
        Schema::dropIfExists('categorias_competencia');
        Schema::dropIfExists('dias_competencia');
        Schema::dropIfExists('competencias');
        Schema::dropIfExists('tipos_competencia');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('divisiones');
    }
};
