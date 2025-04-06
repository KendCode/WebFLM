<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento; // Asegúrate de importar el modelo Evento

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all(); // Leer eventos
        return view('eventos.index', compact('eventos'));
    }

    public function create()
    {
        return view('eventos.create'); // Crear evento
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha' => 'required|date',
            'ubicacion' => 'required|string|max:255',
        ]);

        Evento::create($request->all()); // Guardar evento
        return redirect()->route('eventos.index')->with('success', 'Evento creado exitosamente.');
    }

    public function edit(Evento $evento)
    {
        return view('eventos.edit', compact('evento')); // Editar evento
    }

    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha' => 'required|date',
            'ubicacion' => 'required|string|max:255',
        ]);

        $evento->update($request->all()); // Actualizar evento
        return redirect()->route('eventos.index')->with('success', 'Evento actualizado exitosamente.');
    }

    public function destroy(Evento $evento)
    {
        $evento->delete(); // Eliminar evento
        return redirect()->route('eventos.index')->with('success', 'Evento eliminado exitosamente.');
    }
}
