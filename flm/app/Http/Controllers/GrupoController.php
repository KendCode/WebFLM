<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo; // Asegúrate de importar el modelo Grupo

class GrupoController extends Controller
{
    public function index()
{
    $grupos = Grupo::all(); // Obtener todos los grupos
    return view('grupo.listaGrupo', compact('grupos')); // Pasar los grupos a la vista
}

public function store(Request $request)
{
    // Crear y guardar el grupo
    $grupo = new Grupo();
    $grupo->nombre = $request->nombre;
    $grupo->descripcion = $request->descripcion;
    $grupo->fecha = $request->fecha;
    $grupo->hora = $request->hora;
    $grupo->estado = $request->estado;
    $grupo->nroParticipantes = $request->nroParticipantes;
    $grupo->tematica = $request->tematica;
    $grupo->save();
    
    // Redirigir de vuelta con un mensaje de éxito
    return redirect()->back()->with('success', 'Grupo guardado exitosamente');
}
}
