<?php

namespace App\Http\Controllers\Admin\Competencia;

use App\Http\Controllers\Controller;

// Servicio encargado de la lógica de negocio.
use App\Services\Admin\Competencia\CompetenciaService;

// Request que valida la información.
use App\Http\Requests\Admin\Competencia\CrearCompetenciaRequest;

class CompetenciaController extends Controller
{
    /**
     * Laravel inyecta automáticamente el Service.
     */
    public function __construct(
        private CompetenciaService $competenciaService
    ){}

    /**
     * Mostrar las competencias registradas.
     */
    public function mostrar()
    {
        $competencias = $this->competenciaService->listar();

        return view(
            'admin.competencia.secciones.lista_competencias',
            compact('competencias')
        );
    }

    /**
     * Crear una nueva competencia.
     */
    public function crear(CrearCompetenciaRequest $request)
    {
        $this->competenciaService->crear(
            $request->validated()
        );
        
        //Respuesta que recibirá Ajax.
        return response()->json([

            'status' => true,

            'message' => 'Competencia registrada correctamente.'

        ]);
    }

    /**
     * Redirigir a vista con el listado de competencias.
     */
    public function index()
    {
        return view(
            'admin.competencia.index',
            $this->competenciaService->index()
        );
    }

    /**
     * Redirigir a vista detalle de una competencia.
     */
    public function detalle(int $id)
    {
        return view(
            'admin.competencia.detalle',
            $this->competenciaService->detalle($id)
        );
    }
}