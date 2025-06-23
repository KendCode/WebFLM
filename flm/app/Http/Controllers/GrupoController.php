<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo; // Asegúrate de importar el modelo Grupo
use Barryvdh\DomPDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Concerns\FromCollection;
use Spatie\SimpleExcel\SimpleExcelWriter;
use Carbon\Carbon;

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
    public function editGrupo($id)
    {
        $grupo = Grupo::findOrFail($id); // Asegura que existe
        return view('grupo.editGrupo', ['grupo' => $grupo]);
    }
    public function update(Request $request, $id)
    {
        // Buscar el grupo por ID
        $grupo = Grupo::findOrFail($id);

        // Llenar con los nuevos datos
        $grupo->fill($request->all());

        // Verificar si hubo cambios
        if ($grupo->isDirty()) {
            $grupo->save();
            return redirect()->route('grupo.edit', $grupo->id)
                             ->with('success', '¡Grupo actualizado correctamente!');
        }
        return redirect()->route('grupo.edit', $grupo->id)
                         ->with('info', 'No se realizaron cambios en el grupo.');
    }
    public function destroy($id)
    {
        $grupo = Grupo::findOrFail($id);
        $grupo->delete();
        return redirect()->route('grupo.index')->with('success', 'Grupo eliminado exitosamente');
    }
    public function show($id)
    {
        $grupo = Grupo::findOrFail($id); // Asegura que existe
        return view('grupo.showGrupo', ['grupo' => $grupo]); // Mostrar detalles del grupo
    }
    public function exportPdf($id)
    {
        $grupo = Grupo::findOrFail($id);
        $pdf = PDF::loadView('grupo.pdfGrupo', compact('grupo')); // Cargar la vista PDF con el beneficiario
        return $pdf->download('grupo_' . $grupo->id . '.pdf');
    }
    public function exportExcel()
    {
        $grupos = Grupo::all(['id', 'nombre', 'descripcion', 'fecha', 'hora', 'estado', 'nroParticipantes', 'tematica']);

        // Escribir cada grupo
        $datos = $grupos->map(function ($grupo) {
            return [
                'Id'=>$grupo->id,
                'Nombre'=>$grupo->nombre,
                'Descripcion'=>$grupo->descripcion,
                'Fecha'=>Carbon::parse($grupo->fecha)->format('Y-m-d'),
                'Hora'=>$grupo->hora,
                'Estado'=>$grupo->estado,
                'Nro Participantes'=>$grupo->nroParticipantes,
                'Tematica'=>$grupo->tematica
            ];
        });

            $path = storage_path('app/public/grupos.xlsx');

            SimpleExcelWriter::create($path)->addRows($datos->toArray());

            return response()->download($path, 'grupos.xlsx')->deleteFileAfterSend(true);
        }
}
