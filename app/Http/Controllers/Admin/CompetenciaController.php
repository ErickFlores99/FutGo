<?php

namespace App\Http\Controllers\Admin;

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
        private CompetenciaService $service
    ){}

    /**
     * Mostrar las competencias registradas.
     */
    public function mostrar()
    {
        $competencias = $this->service->listar();

        return view(
            'admin.template.components.secciones.lista_competencias',
            compact('competencias')
        );
    }

    /**
     * Crear una nueva competencia.
     */
    public function crear(CrearCompetenciaRequest $request)
    {
        $competencia = $this->service->crear(
            $request->validated()
        );
        
        //Respuesta que recibirá Ajax.
        return response()->json([

            'status' => true,

            'message' => 'Competencia registrada correctamente.'

        ]);
    }
}