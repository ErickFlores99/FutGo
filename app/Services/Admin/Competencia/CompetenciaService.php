<?php

namespace App\Services\Admin\Competencia;

use App\Models\Competencia\Competencia;
use App\Models\Competencia\CompetenciaDia;
use App\Models\Competencia\CompetenciaGrupo;
use App\Models\Competencia\CompetenciaTipo;
use App\Models\Competencia\CompetenciaCategoria;
use App\Models\Competencia\CompetenciaDivision;
use App\Models\Competencia\CompetenciaGenero;
use Illuminate\Support\Facades\DB;

class CompetenciaService
{
    /**
     * Obtiene las competencias para mostrar en el panel.
     */
    public function listar()
    {
        return Competencia::with([
            'tipo',
            'grupos.genero',
            'grupos.categoria',
            'grupos.division',
        ])
        ->latest()
        ->get();
    }

    /**
     * Crear una competencia con toda su información relacionada.
     */
    public function crear(array $data): Competencia
    {
        return DB::transaction(function () use ($data) {

            /*
            |--------------------------------------------------------------------------
            | Competencia
            |--------------------------------------------------------------------------
            */

            $competencia = Competencia::create([
                'tipo_competencia_id' => $data['tipo_competencia'],
                'administrador_id'    => auth()->id(),
                'nombre'              => $data['nombre'],
                'descripcion'         => $data['descripcion'] ?? null,
                //'fecha_inicio'        => $data['fecha_inicio'],
                //'fecha_fin'           => $data['fecha_fin'],
                'es_nocturna'         => $data['es_nocturna'],
            ]);

            /*
            |--------------------------------------------------------------------------
            | Días de juego
            |--------------------------------------------------------------------------
            */

            foreach ($data['dias'] as $dia) {
                CompetenciaDia::create([
                    'competencia_id' => $competencia->id,
                    'dia'            => $dia,
                ]);
            }

            /*
            |--------------------------------------------------------------------------
            | Grupos
            |--------------------------------------------------------------------------
            |
            | Se generan todas las combinaciones posibles:
            | Género + Categoría + División
            |
            */

            foreach ($data['generos'] as $generoId) {

                foreach ($data['categorias'] as $categoriaId) {

                    foreach ($data['divisiones'] as $divisionId) {

                        CompetenciaGrupo::create([
                            'competencia_id' => $competencia->id,
                            'genero_id'      => $generoId,
                            'categoria_id'   => $categoriaId,
                            'division_id'    => $divisionId,
                            'estatus'        => 0,
                        ]);

                    }

                }

            }

            return $competencia;
        });
    }

    public function index(): array
    {
        return [
            'competencias' => Competencia::with([
                'dias',
                'grupos',
                'tipo',
            ])->latest()->get(),

            'tiposCompetencia' => CompetenciaTipo::orderBy('nombre')->get(),

            'categorias' => CompetenciaCategoria::orderBy('nombre')->get(),

            'divisiones' => CompetenciaDivision::orderBy('nombre')->get(),

            'generos' => CompetenciaGenero::orderBy('nombre')->get(),
        ];
    }

    public function detalle(int $id): array
    {
        $competencia = Competencia::with([
            'dias',
            'grupos',
            'tipo',
        ])->findOrFail($id);

        return [
            'competencia' => $competencia,
        ];
    }
}