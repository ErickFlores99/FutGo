<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

// Servicio encargado de la lógica de negocio.
use App\Services\Admin\Competencia\CompetenciaService;

class AdminController extends Controller
{
    /**
     * Laravel inyecta automáticamente el Service.
     */
    public function __construct(
        private CompetenciaService $competenciaService
    ){}

    /**
     * Dashboard administrativo
     */
    public function index()
    {
        return view('admin.index',
            $this->competenciaService->index()
        );
    }
}