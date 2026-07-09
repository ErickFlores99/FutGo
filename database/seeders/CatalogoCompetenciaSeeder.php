<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Division;
use App\Models\TipoCompetencia;
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
                [
                    'descripcion' => null,
                ]
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Categorías
        |--------------------------------------------------------------------------
        */

        $categorias = [
            [
                'nombre' => 'Libre',
                'descripcion' => null,
                'edad_minima' => null,
                'edad_maxima' => null,
            ],
            [
                'nombre' => 'Juvenil',
                'descripcion' => null,
                'edad_minima' => 15,
                'edad_maxima' => 17,
            ],
            [
                'nombre' => 'Infantil',
                'descripcion' => null,
                'edad_minima' => 8,
                'edad_maxima' => 14,
            ],
            [
                'nombre' => 'Mixto',
                'descripcion' => null,
                'edad_minima' => 18,
                'edad_maxima' => null,
            ],
            [
                'nombre' => 'Femenil',
                'descripcion' => null,
                'edad_minima' => 15,
                'edad_maxima' => null,
            ],
            [
                'nombre' => 'Veteranos',
                'descripcion' => null,
                'edad_minima' => 35,
                'edad_maxima' => null,
            ],
        ];

        foreach ($categorias as $categoria) {
            Categoria::updateOrCreate(
                ['nombre' => $categoria['nombre']],
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
            TipoCompetencia::updateOrCreate(
                ['nombre' => $tipo]
            );
        }
    }
}

