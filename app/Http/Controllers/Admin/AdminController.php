<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\TipoCompetencia;
use App\Models\Categoria;
use App\Models\Division;

class AdminController extends Controller
{
    /**
     * Dashboard administrativo
     */
    public function index()
    {
        return view('admin.index', [

            'tiposCompetencia' => TipoCompetencia::all(),

            'categorias' => Categoria::all(),

            'divisiones' => Division::all(),

        ]);
    }
}