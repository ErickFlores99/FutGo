<?php

namespace App\Http\Requests\Admin\Competencia;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class CrearCompetenciaRequest extends FormRequest
{
    /**
     * Respuesta personalizada para peticiones AJAX.
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status'  => false,
                'message' => 'Error de validación.',
                'errors'  => $validator->errors(),
            ], 422)
        );
    }

    /**
     * Determina si el usuario puede realizar la petición.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Preparar los datos antes de validar.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'es_nocturna' => $this->boolean('es_nocturna'),
        ]);
    }

    /**
     * Reglas de validación.
     */
    public function rules(): array
    {
        return [

            /*
            |--------------------------------------------------------------------------
            | Competencia
            |--------------------------------------------------------------------------
            */

            'tipo_competencia' => [
                'required',
                'exists:competencia_tipos,id',
            ],

            'nombre' => [
                'required',
                'string',
                'max:100',
                Rule::unique('competencias', 'nombre'),
            ],

            'descripcion' => [
                'nullable',
                'string',
                'max:1000',
            ],

            /*
            'fecha_inicio' => [
                'required',
                'date',
            ],

            'fecha_fin' => [
                'required',
                'date',
                'after_or_equal:fecha_inicio',
            ],
            */
            
            'es_nocturna' => [
                'boolean',
            ],

            /*
            |--------------------------------------------------------------------------
            | Grupos
            |--------------------------------------------------------------------------
            */

            'generos' => [
                'required',
                'array',
                'min:1',
            ],

            'generos.*' => [
                'required',
                'distinct',
                'exists:competencia_generos,id',
            ],

            'categorias' => [
                'required',
                'array',
                'min:1',
            ],

            'categorias.*' => [
                'required',
                'distinct',
                'exists:competencia_categorias,id',
            ],

            'divisiones' => [
                'required',
                'array',
                'min:1',
            ],

            'divisiones.*' => [
                'required',
                'distinct',
                'exists:competencia_divisiones,id',
            ],

            /*
            |--------------------------------------------------------------------------
            | Días
            |--------------------------------------------------------------------------
            */

            'dias' => [
                'required',
                'array',
                'min:1',
            ],

            'dias.*' => [
                'required',
                'distinct',
                'integer',
                'between:1,7',
            ],
        ];
    }

    /**
     * Mensajes personalizados.
     */
    public function messages(): array
    {
        return [

            'tipo_competencia.required' => 'Seleccione un tipo de competencia.',
            'tipo_competencia.exists'   => 'El tipo de competencia seleccionado no es válido.',

            'nombre.required' => 'Ingrese el nombre de la competencia.',
            'nombre.max'      => 'El nombre no puede superar los 100 caracteres.',
            'nombre.unique'   => 'Ya existe una competencia con ese nombre.',

            'descripcion.max' => 'La descripción no puede superar los 1000 caracteres.',

            'fecha_inicio.required' => 'Ingrese la fecha de inicio.',
            'fecha_inicio.date'     => 'La fecha de inicio no es válida.',

            'fecha_fin.required'       => 'Ingrese la fecha de finalización.',
            'fecha_fin.date'           => 'La fecha de finalización no es válida.',
            'fecha_fin.after_or_equal' => 'La fecha de finalización debe ser igual o posterior a la fecha de inicio.',

            'generos.required' => 'Seleccione al menos un género.',
            'generos.array'    => 'Los géneros seleccionados son inválidos.',
            'generos.min'      => 'Seleccione al menos un género.',
            'generos.*.exists' => 'Uno de los géneros seleccionados no existe.',

            'categorias.required' => 'Seleccione al menos una categoría.',
            'categorias.array'    => 'Las categorías seleccionadas son inválidas.',
            'categorias.min'      => 'Seleccione al menos una categoría.',
            'categorias.*.exists' => 'Una de las categorías seleccionadas no existe.',

            'divisiones.required' => 'Seleccione al menos una división.',
            'divisiones.array'    => 'Las divisiones seleccionadas son inválidas.',
            'divisiones.min'      => 'Seleccione al menos una división.',
            'divisiones.*.exists' => 'Una de las divisiones seleccionadas no existe.',

            'dias.required' => 'Seleccione al menos un día de juego.',
            'dias.array'    => 'Los días de juego son inválidos.',
            'dias.min'      => 'Seleccione al menos un día de juego.',
            'dias.*.between'=> 'Uno de los días seleccionados no es válido.',
        ];
    }

    /**
     * Nombres amigables.
     */
    public function attributes(): array
    {
        return [
            'tipo_competencia' => 'tipo de competencia',
            'nombre'           => 'nombre',
            'descripcion'      => 'descripción',
            'fecha_inicio'     => 'fecha de inicio',
            'fecha_fin'        => 'fecha de finalización',
            'generos'          => 'géneros',
            'categorias'       => 'categorías',
            'divisiones'       => 'divisiones',
            'dias'             => 'días de juego',
            'es_nocturna'      => 'competencia nocturna',
        ];
    }
}