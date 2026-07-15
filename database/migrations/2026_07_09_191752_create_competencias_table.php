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
            $table->string('nombre', 100)->unique();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });

        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique();
            $table->text('descripcion')->nullable();
            $table->unsignedSmallInteger('edad_minima')->nullable();
            $table->unsignedSmallInteger('edad_maxima')->nullable();
            $table->timestamps();
        });

        Schema::create('competencia_tipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique();
            $table->timestamps();
        });

        Schema::create('competencias', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();
            $table->year('temporada');

            $table->foreignId('tipo_id')
                ->constrained('competencia_tipos')
                ->cascadeOnDelete();

            $table->foreignId('administrador_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->date('fecha_inicio');
            $table->date('fecha_fin');

            $table->boolean('es_nocturna')->default(false);

            $table->tinyInteger('estatus')
                ->default(0)
                ->comment('0=Pendiente,1=Activa,2=Suspendida,3=Finalizada,4=Cancelada');

            $table->timestamps();

            $table->unique(
                ['nombre', 'temporada'],
                'uk_comp_nombre_temp'
            );
        });

        Schema::create('competencia_dias', function (Blueprint $table) {
            $table->id();

            $table->foreignId('competencia_id')
                ->constrained('competencias')
                ->cascadeOnDelete();

            $table->tinyInteger('dia')
                ->comment('1=Lunes ... 7=Domingo');

            $table->timestamps();

            $table->unique(
                ['competencia_id', 'dia'],
                'uk_comp_dia'
            );
        });

        Schema::create('competencia_categorias', function (Blueprint $table) {
            $table->id();

            $table->foreignId('competencia_id')
                ->constrained('competencias')
                ->cascadeOnDelete();

            $table->foreignId('categoria_id')
                ->constrained('categorias')
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique(
                ['competencia_id', 'categoria_id'],
                'uk_comp_cat'
            );
        });

        Schema::create('competencia_div_cats', function (Blueprint $table) {
            $table->id();

            $table->foreignId('competencia_categoria_id')
                ->constrained('competencia_categorias')
                ->cascadeOnDelete();

            $table->foreignId('division_id')
                ->constrained('divisiones')
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique(
                ['competencia_categoria_id', 'division_id'],
                'uk_comp_cat_div'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competencia_div_cats');
        Schema::dropIfExists('competencia_categorias');
        Schema::dropIfExists('competencia_dias');
        Schema::dropIfExists('competencias');
        Schema::dropIfExists('competencia_tipos');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('divisiones');
    }
};
