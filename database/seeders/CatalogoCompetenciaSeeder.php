<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Competencia\CompetenciaTipo;
use App\Models\Competencia\CompetenciaGenero;
use App\Models\Competencia\CompetenciaCategoria;
use App\Models\Competencia\CompetenciaDivision;

class CatalogoCompetenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Tipos de competencia
        |--------------------------------------------------------------------------
        */

        $tipos = [
            'Liga',
            'Torneo',
            'Copa',
            'Eliminación Directa',
            'Hexagonal',
            'Cuadrangular',
        ];

        foreach ($tipos as $tipo) {
            CompetenciaTipo::updateOrCreate(
                ['nombre' => $tipo],
                ['descripcion' => null]
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Géneros
        |--------------------------------------------------------------------------
        */

        $generos = [
            'Varonil',
            'Femenil',
            'Mixto',
        ];

        foreach ($generos as $genero) {
            CompetenciaGenero::updateOrCreate(
                ['nombre' => $genero],
                [
                    'descripcion' => null,
                    'estatus' => 1,
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
                'nombre' => 'Infantil',
                'edad_minima' => 6,
                'edad_maxima' => 12,
            ],
            [
                'nombre' => 'Juvenil',
                'edad_minima' => 13,
                'edad_maxima' => 17,
            ],
            [
                'nombre' => 'Libre',
                'edad_minima' => null,
                'edad_maxima' => null,
            ],
            [
                'nombre' => 'Veteranos',
                'edad_minima' => 35,
                'edad_maxima' => null,
            ],
        ];

        foreach ($categorias as $categoria) {
            CompetenciaCategoria::updateOrCreate(
                ['nombre' => $categoria['nombre']],
                [
                    'descripcion' => null,
                    'edad_minima' => $categoria['edad_minima'],
                    'edad_maxima' => $categoria['edad_maxima'],
                    'estatus' => 1,
                ]
            );
        }

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
            CompetenciaDivision::updateOrCreate(
                ['nombre' => $division],
                [
                    'descripcion' => null,
                    'estatus' => 1,
                ]
            );
        }
    }
}