<?php

namespace App\Services\Admin\Competencia;


use App\Models\Competencia\Competencia;
use App\Models\Competencia\CompetenciaGrupo;
use App\Models\Competencia\CompetenciaGrupoDia;
use App\Models\Competencia\CompetenciaTipo;
use App\Models\Competencia\CompetenciaCategoria;
use App\Models\Competencia\CompetenciaDivision;
use App\Models\Competencia\CompetenciaGenero;


class CompetenciaGrupoService
{

    /**
     * Obtener información del grupo.
     */
    public function detalle(
        Competencia $competencia,
        CompetenciaGrupo $grupo
    ): array
    {

        $grupo->load([
            'categoria',
            'division',
            'genero',
            'dias',
        ]);

        return [
            'competencia' => $competencia,
            'grupo' => $grupo,

            'tiposCompetencia' => CompetenciaTipo::orderBy('nombre')->get(),
            'dias' => [
                1 => 'Lunes',
                2 => 'Martes',
                3 => 'Miércoles',
                4 => 'Jueves',
                5 => 'Viernes',
                6 => 'Sábado',
                7 => 'Domingo',
            ],
        ];
    }

    
}