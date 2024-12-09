<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UsuarioController extends Controller
{
    public function index()
    {
        // Obtener el usuario logueado
        $usuario = Auth::user();

        // Retornar la vista con los datos del usuario
        return view('usuarios.index', compact('usuario'));
    }

    public function create()
    {
        // Muestra el formulario de registro
        return view('usuarios.register');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|min:6',
        ]);

        // Crear el usuario en la base de datos
        $usuario = new Usuario();
        $usuario->nombre = $validatedData['nombre'];
        $usuario->apellido = $validatedData['apellido'];
        $usuario->email = $validatedData['email'];
        $usuario->password = Hash::make($validatedData['password']);
        $usuario->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('usuarios.create')->with('success', 'Usuario registrado exitosamente');
    }
}

