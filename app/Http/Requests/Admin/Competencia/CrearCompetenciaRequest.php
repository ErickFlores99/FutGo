<?php

namespace App\Http\Requests\Admin\Competencia;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;


class CrearCompetenciaRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status' => false,
                'message' => 'Error de validación.',
                'errors' => $validator->errors()
            ], 422)
        );
    }
    /**
     * Determina si el usuario tiene permiso para realizar esta petición.
     *
     * Si retorna false Laravel responderá con un error 403.
     * Generalmente aquí se validan permisos o roles.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación.
     *
     * Laravel valida cada campo antes de ejecutar el controlador.
     * Si alguna regla falla nunca entrará al método crear().
     */
    public function rules(): array
    {
        return [

            // Debe existir un tipo de competencia.
            'tipo_competencia_id' => [
                'required',
                'exists:tipos_competencia,id',
            ],

            // Debe existir una categoría.
            'categoria_id' => [
                'required',
                'exists:categorias,id',
            ],

            // La división es opcional.
            'division_id' => [
                'required',
                'exists:divisiones,id',
            ],

            // Nombre obligatorio.
            'nombre' => [
                'required',
                'string',
                'max:100',
                Rule::unique('competencias', 'nombre'),
            ],

            // Fecha válida.
            'fecha_inicio' => [
                'nullable',
                'date',
            ],

            // Debe ser mayor o igual a la fecha de inicio.
            'fecha_fin' => [
                'nullable',
                'date',
                'after_or_equal:fecha_inicio',
            ],

            // Debe recibirse un arreglo.
            'dias_id' => [
                'required',
                'array',
                'min:1',
            ],

            // Cada elemento del arreglo.
            'dias_id.*' => [
                'integer',
                'between:1,7',
            ],

            // Descripción opcional.
            'descripcion' => [
                'nullable',
                'string',
                'max:1000',
            ],

        ];
    }

    /**
     * Mensajes personalizados.
     *
     * Laravel mostrará estos mensajes cuando falle una validación.
     */
    public function messages(): array
    {
        return [

            'tipo_competencia_id.required' => 'Seleccione un tipo de competencia.',
            'tipo_competencia_id.exists'   => 'El tipo de competencia seleccionado no es válido.',

            'categoria_id.required' => 'Seleccione una categoría.',
            'categoria_id.exists'   => 'La categoría seleccionada no es válida.',

            'division_id.required' => 'Seleccione una división.',
            'division_id.exists' => 'La división seleccionada no es válida.',

            'nombre.required' => 'Ingrese el nombre de la competencia.',
            'nombre.max'      => 'El nombre no puede superar los 100 caracteres.',
            'nombre.unique' => 'Ya existe una competencia con ese nombre.',

            'fecha_inicio.date' => 'La fecha de inicio no es válida.',

            'fecha_fin.date'           => 'La fecha de finalización no es válida.',
            'fecha_fin.after_or_equal' => 'La fecha de finalización debe ser igual o posterior a la fecha de inicio.',

            'dias_id.required' => 'Seleccione al menos un día de juego.',
            'dias_id.array'    => 'Los días de juego son inválidos.',
            'dias_id.min'      => 'Seleccione al menos un día de juego.',

            'dias_id.*.integer' => 'Uno de los días seleccionados es inválido.',
            'dias_id.*.between' => 'Uno de los días seleccionados no existe.',

            'descripcion.max' => 'La descripción no puede superar los 1000 caracteres.',

            'nombre.unique' => 'Ya existe una competencia con este nombre.',

        ];
    }

    /**
     * Cambia el nombre técnico del campo por uno más amigable.
     *
     * Ejemplo:
     * nombre -> "nombre"
     * categoria_id -> "categoría"
     */
    public function attributes(): array
    {
        return [

            'tipo_competencia_id' => 'tipo de competencia',
            'categoria_id' => 'categoría',
            'division_id' => 'división',
            'nombre' => 'nombre',
            'fecha_inicio' => 'fecha de inicio',
            'fecha_fin' => 'fecha de finalización',
            'dias_id' => 'días de juego',
            'descripcion' => 'descripción',
            'nombre.unique' => 'Ya existe una competencia registrada con este nombre.',

        ];
    }
}