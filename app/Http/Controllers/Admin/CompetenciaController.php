<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

// Servicio encargado de la lógica de negocio.
use App\Services\Admin\CompetenciaService;

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