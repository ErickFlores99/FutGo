<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Competencia\CompetenciaTipo;
use App\Models\Competencia\CompetenciaCategoria;
use App\Models\Competencia\CompetenciaDivision;
use App\Models\Competencia\CompetenciaGenero;
use App\Models\Competencia\Competencia;

class AdminController extends Controller
{
    /**
     * Dashboard administrativo
     */
    public function index()
    {
        return view('admin.index', [

           'competencias' => Competencia::with([
                'dias',
                'grupos',
            ])->get(),

            'tiposCompetencia' => CompetenciaTipo::all(),

            'categorias' => CompetenciaCategoria::all(),

            'divisiones' => CompetenciaDivision::all(),

            'generos' => CompetenciaGenero::all(),

        ]);
    }
}