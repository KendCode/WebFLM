<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento; // Asegúrate de importar el modelo Evento

class EventoController extends Controller
{
    public function index()
    {
        
    }

    public function store(Request $request)
    {
         // Crear y guardar el evento
         $evento = new Evento();
         $evento->titulo = $request->titulo;
         $evento->descripcion = $request->descripcion;
         $evento->fecha = $request->fecha;
         $evento->ubicacion = $request->ubicacion;
         $evento->save();

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->back()->with('success', 'Evento guardado exitosamente');
    }

    
}
