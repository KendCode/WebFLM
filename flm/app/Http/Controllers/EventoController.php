<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento; // Asegúrate de importar el modelo Evento
use Barryvdh\DomPDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Concerns\FromCollection;
use Spatie\SimpleExcel\SimpleExcelWriter;
use Carbon\Carbon;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all(); // Obtener todos los eventos
        return view('evento.listaEvento', compact('eventos')); // Pasar los eventos a la vista
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
    public function editEvento($id)
    {
        $evento = Evento::findOrFail($id); // Asegura que existe
        return view('evento.editEvento', ['evento' => $evento]);
    }
    public function update(Request $request, $id)
    {
        // Buscar el evento por ID
        $evento = Evento::findOrFail($id);

        // Llenar con los nuevos datos
        $evento->fill($request->all());

        // Verificar si hubo cambios
        if ($evento->isDirty()) {
            $evento->save();
            return redirect()->route('evento.edit', $evento->id)
                             ->with('success', '¡Evento actualizado correctamente!');
        }

        return redirect()->route('evento.edit', $evento->id)
                         ->with('info', 'No se realizaron cambios en el evento.');
    }
    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return redirect()->route('evento.index')->with('success', 'Evento eliminado exitosamente');
    }
    public function show($id)
    {
        $evento = Evento::findOrFail($id); // Asegura que existe
        return view('evento.showEvento', ['evento' => $evento]);
    }  
    public function exportPdf($id)
    {
        $evento = Evento::findOrFail($id);
        $pdf = PDF::loadView('evento.pdfEvento', compact('evento')); // Cargar la vista PDF con el beneficiario
        return $pdf->download('evento_' . $evento->id . '.pdf');
    }
    public function exportExcel()
    {
        $eventos = Evento::all(['id', 'titulo', 'descripcion', 'fecha', 'ubicacion']);
        $datos = $eventos->map(function ($evento) {
            return[
                'Id'=> $evento->id,
                'Titulo'=> $evento->titulo,
                'Descripcion'=> $evento->descripcion,
                'Fecha'=> Carbon::parse($evento->fecha)->format('Y-m-d'),
                'Ubicacion'=> $evento->ubicacion,
            ];
        });
        $path = storage_path('app/public/eventos.xlsx');

        SimpleExcelWriter::create($path)->addRows($datos->toArray());
        return response()->download($path, 'eventos.xlsx')->deleteFileAfterSend(true);

    }
}
