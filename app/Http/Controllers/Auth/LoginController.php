<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; // Importamos la clase Request para el logout

class LoginController extends Controller
{
    /**
     * Muestra la vista del formulario de login.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Procesa el intento de inicio de sesión.
     */
    public function store(LoginRequest $request)
    {
        // Obtiene únicamente los datos validados del LoginRequest (email y password)
        $credentials = $request->validated();

        // Intenta autenticar al usuario. El segundo parámetro evalúa si el checkbox 'remember' está marcado.
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            
            // Regenera la sesión para evitar ataques de fijación de sesión
            $request->session()->regenerate();

            // Redirige a la ruta que el usuario intentaba visitar originalmente, 
            // o a la ruta 'appIndex' por defecto.
            return redirect()->intended(route('appIndex'));
        }

        // Si la autenticación falla, regresa atrás con el error personalizado
        // y conserva el correo que el usuario escribió (onlyInput)
        return back()
            ->withErrors([
                'email' => 'Las credenciales son incorrectas.'
            ])
            ->onlyInput('email');
    }

    /**
     * Cierra la sesión del usuario.
     */
    public function destroy(Request $request)
    {
        // Desautentica al usuario
        Auth::logout();

        // Invalida la sesión actual del usuario
        $request->session()->invalidate();

        // Regenera el token CSRF para prevenir mal uso de la sesión vieja
        $request->session()->regenerateToken();

        // Redirige al formulario de inicio de sesión
        return redirect()->route('login');
    }
}