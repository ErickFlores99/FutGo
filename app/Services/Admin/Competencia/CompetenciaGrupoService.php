<?php

namespace App\Services\Admin\Competencia;


use App\Models\Competencia\Competencia;
use App\Models\Competencia\CompetenciaGrupo;


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
        ]);

        return [
            'competencia' => $competencia,
            'grupo' => $grupo,
        ];
    }

}