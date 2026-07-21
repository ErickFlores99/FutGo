<?php

namespace App\Http\Controllers\Admin\Competencia;


use App\Http\Controllers\Controller;

use App\Models\Competencia\Competencia;
use App\Models\Competencia\CompetenciaGrupo;
use App\Services\Admin\Competencia\CompetenciaGrupoService;

class CompetenciaGrupoController extends Controller
{
    public function __construct(
        private CompetenciaGrupoService $competenciaGrupoService
    )
    {

    }

    /**
     * Mostrar detalle del grupo.
     */
    public function detalle(
        Competencia $competencia,
        CompetenciaGrupo $grupo
    )
    {
        return view(
            'admin.competencia.competencia_grupo.detalle',
            $this->competenciaGrupoService->detalle(
                $competencia,
                $grupo
            )
        );
    }
}