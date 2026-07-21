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
        Schema::create('competencias', function (Blueprint $table) {
            $table->id();

            $table->foreignId('tipo_competencia_id')
                ->constrained('competencia_tipos');

            $table->foreignId('administrador_id')
                ->constrained('users');

            $table->string('nombre');
            $table->text('descripcion')->nullable();

            $table->date('fecha_inicio');
            $table->date('fecha_fin');

            $table->boolean('es_nocturna')->default(false);

            $table->tinyInteger('estatus')
                ->default(0)
                ->comment('0 Configuración,1 Activa,2 Suspendida,3 Finalizada,4 Cancelada');

            $table->timestamps();
        });

        Schema::create('competencia_dias', function (Blueprint $table) {
            $table->id();

            $table->foreignId('competencia_id')
                ->constrained('competencias')
                ->cascadeOnDelete();

            $table->unsignedTinyInteger('dia')
                ->comment('1 Lunes,2 Martes,3 Miércoles,4 Jueves,5 Viernes,6 Sábado,7 Domingo');

            $table->timestamps();
        });

        Schema::create('competencia_grupos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('competencia_id')
                ->constrained('competencias')
                ->cascadeOnDelete();

            $table->foreignId('genero_id')
                ->constrained('competencia_generos');

            $table->foreignId('categoria_id')
                ->constrained('competencia_categorias');

            $table->foreignId('division_id')
                ->constrained('competencia_divisiones');

            $table->tinyInteger('estatus')
                ->default(0)
                ->comment('0 Configuración, 1 Activo,2 Suspendido, 3 Finalizado');

            $table->timestamps();

            $table->unique([
                'competencia_id',
                'genero_id',
                'categoria_id',
                'division_id'
            ], 'competencia_grupo_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competencia_grupos');
        Schema::dropIfExists('competencia_dias');
        Schema::dropIfExists('competencias');
    }
};