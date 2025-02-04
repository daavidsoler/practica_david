<?php

namespace App\Http\Controllers;

use App\Models\Circuito;
use Illuminate\Http\Request;

class CircuitoController extends Controller {
    
    // Obtener todos los circuitos
    public function index() {
        //return response()->json(Circuito::all());
        return Circuito::with(['detalles','usuarios'])->get();

    }

    // Crear un nuevo circuito
    public function store(Request $request) {
        $request->validate([
            'nombre_circuito' => 'required|unique:circuitos',
            'detalles_circuito_id' => 'required|exists:detalles_circuito,id'
        ]);

        $circuito = Circuito::create($request->all());
        return response()->json($circuito, 201);
    }

    // Obtener un circuito por ID
    public function show($id) {
        return response()->json(Circuito::findOrFail($id));
    }

    // Actualizar un circuito por ID
    public function update(Request $request, $id) {
        $circuito = Circuito::findOrFail($id);
        $circuito->update($request->all());
        return response()->json($circuito);
    }

    // Eliminar un circuito por ID
    public function destroy($id) {
        Circuito::destroy($id);
        return response()->json(['message' => 'Circuito eliminado']);
    }
}
