<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use Illuminate\Http\Request;

class CocheController extends Controller {
    
    // Obtener todos los coches
    public function index() {
        return Coche::with(['detalles','usuarios'])->get();
        // return response()->json(Coche::all());
    }

    // Crear un nuevo coche
    public function store(Request $request) {
        $request->validate([
            'nombre_coche' => 'required|unique:coches',
            'detalles_coche_id' => 'required|exists:detalles_coche,id'
        ]);

        $coche = Coche::create($request->all());
        return response()->json($coche, 201);
    }

    // Obtener un coche por ID
    public function show($id) {
        $coche = Coche::findOrFail($id);
        $coche -> load('detalles');
        return response()->json($coche);
    
    }

    // Actualizar un coche por ID
    public function update(Request $request, $id) {
        $coche = Coche::findOrFail($id);
        $coche->update($request->all());
       // return response()->json($coche);
       // return $coche::with(['detalles','usuarios'])->get();
        return "ok";
    }

    // Eliminar un coche por ID
    public function destroy($id) {
        Coche::destroy($id);
        return response()->json(['message' => 'Coche eliminado']);
    }
}
