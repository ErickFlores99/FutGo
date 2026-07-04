<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado a realizar esta petición.
     */
    public function authorize(): bool
    {
        return true; // Cambiado a true para permitir que cualquiera intente loguearse
    }

    /**
     * Obtiene las reglas de validación que se aplicarán a la petición.
     */
    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'email'
            ],
            'password' => [
                'required',
                'string'
            ]
        ];
    }

    /**
     * Define los mensajes de error personalizados para las reglas anteriores.
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Ingrese su correo.',
            'email.email'    => 'Correo inválido.',
            'password.required' => 'Ingrese su contraseña.'
        ];
    }
}