<?php

namespace App\Services\Admin;

// Modelos utilizados.
use App\Models\Competencia;
use App\Models\CategoriaCompetencia;
use App\Models\DiaCompetencia;

class CompetenciaService
{
    /**
     * Crea toda la información relacionada
     * con una competencia.
     *
     * Se recibe un arreglo validado desde el Request.
     */
    public function crear(array $data): Competencia
    {
        /**
         * Crear la competencia.
         */
        $competencia = Competencia::create([

            // Nombre de la competencia.
            'nombre' => $data['nombre'],

            // Descripcion
            'descripcion' => $data['descripcion'] ?? null,

            // Tipo seleccionado.
            'tipo_id' => $data['tipo_competencia_id'],

            // División.
            'division_id' => $data['division_id'],

            // Adminstrador de la competencia / en el caso quien la creo
            'administrador_id' => auth()->id(),

            // Fechas.
            'fecha_inicio' => $data['fecha_inicio'],

            'fecha_fin' => $data['fecha_fin'],

        ]);
        

        /**
         * Registrar los días de juego.
         */
        foreach ($data['dias_id'] as $dia) {
            DiaCompetencia::create([
                'dia' => $dia,
                'competencia_id' => $competencia->id,
            ]);
        }
        

        /**
         * Relacionar la categoría.
         */
        CategoriaCompetencia::create([
            'categoria_id' => $data['categoria_id'],
            'competencia_id' => $competencia->id,
        ]);

        return $competencia;
    }
}