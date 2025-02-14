<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ControladorLogin // extends Controller
{
    // Lista de usuarios y tipo de usuario
    private $users = [
        ['usuario' => 'usuario', 'password' => 'usuario', 'tipo' => 'user'],
        ['usuario' => 'admin', 'password' => 'admin', 'tipo' => 'admin'],
    ];

    /**
     * Método para gestionar el inicio de sesión.
     */
    public function login()
    {
        session_start(); // Inicia la sesión

        // Comprueba si la petición es de tipo POST (intento de inicio de sesión)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'] ?? '';
            $password = $_POST['password'] ?? '';

            // Recorre la lista de usuarios para verificar las credenciales
            foreach ($this->users as $user) {
                if ($user['usuario'] === $usuario && $user['password'] === $password) {
                    // Si las credenciales son correctas, crea una cookie válida por 30 días
                    setcookie('usuario', $usuario, time() + (86400 * 30), "/");
                    
                    // Guarda el usuario en la sesión
                    $_SESSION['usuario'] = $usuario;

                    // Redirige al menú correspondiente, pasando el tipo de usuario
                    return view('menu-admin', ['tipo' => $user['tipo']]);
                }
            }

            // Si las credenciales no coinciden, devuelve un error
            $error = 'Usuario no válido';
            return view('login', ['error' => $error]);
        } else {
            // Si no es una petición POST, intenta recuperar el usuario desde la cookie
            $usuario = $_COOKIE['usuario'] ?? '';
            return view('login', ['usuario' => $usuario]);
        }
    }
}
