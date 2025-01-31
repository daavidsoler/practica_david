<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller {
    public function index() {
        return response()->json(Usuario::all());
    }

    public function store(Request $request) {
        $request->validate([
            'username' => 'required|unique:usuarios',
            'email' => 'required|email|unique:usuarios',
            'password' => 'required|min:6'
        ]);

        $usuario = Usuario::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json($usuario, 201);
    }

    public function show($id) {
        return response()->json(Usuario::findOrFail($id));
    }

    public function update(Request $request, $id) {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return response()->json($usuario);
    }

    public function destroy($id) {
        Usuario::destroy($id);
        return response()->json(['message' => 'Usuario eliminado']);
    }
}
