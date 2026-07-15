<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Division;
use App\Models\CompetenciaTipo;
use Illuminate\Database\Seeder;

class CatalogoCompetenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Divisiones
        |--------------------------------------------------------------------------
        */

        $divisiones = [
            'Primera',
            'Segunda',
            'Tercera',
            'Ascenso',
            'Premier',
        ];

        foreach ($divisiones as $division) {
            Division::updateOrCreate(
                ['nombre' => $division],
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Categorías
        |--------------------------------------------------------------------------
        */

        $categorias = [
            'Libre',
            'Juvenil',
            'Infantil',
            'Mixto',
            'Femenil',
            'Veteranos',
        ];

        foreach ($categorias as $categoria) {
            Categoria::updateOrCreate(
                ['nombre' => $categoria],
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Tipos de competencia
        |--------------------------------------------------------------------------
        */

        $tiposCompetencia = [
            'Liga',
            'Torneo',
            'Copa',
            'Eliminación Directa',
            'Hexagonal',
            'Cuadrangular',
        ];

        foreach ($tiposCompetencia as $tipo) {
            CompetenciaTipo::updateOrCreate(
                ['nombre' => $tipo]
            );
        }
    }
}

