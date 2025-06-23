<?php

namespace App\Http\Controllers;

use App\Models\Beneficiario;
use Illuminate\Http\Request;
use Barryvdh\DomPDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Concerns\FromCollection;
use Spatie\SimpleExcel\SimpleExcelWriter;
use Carbon\Carbon;

class BeneficiarioController extends Controller
{
    public function index()
    {
        $beneficiarios = Beneficiario::all(); // Obtener todos los eventos
        return view('beneficiario.listaBeneficiario', compact('beneficiarios')); // Pasar los eventos a la vista
    }
    public function store(Request $request)
    {
        // Crear y guardar el evento
        $beneficiario = new Beneficiario();
        $beneficiario->nombre = $request->nombre;
        $beneficiario->apellido = $request->apellido;
        $beneficiario->ci = $request->ci;
        $beneficiario->genero = $request->genero;
        $beneficiario->nroCelular = $request->nroCelular;
        $beneficiario->fechaNacimiento = $request->fechaNacimiento;
        $beneficiario->direccion = $request->direccion;
        $beneficiario->save();
        
        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->back()->with('success', 'Beneficiario guardado exitosamente');
    }

    public function editBeneficiario($id)
    {
        $beneficiario = Beneficiario::findOrFail($id); // Asegura que existe
        return view('beneficiario.editBeneficiario', ['beneficiario' => $beneficiario]);
    }
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => ['required', 'regex:/^[\pL\s\-]+$/u', 'max:50'],
            'apellido' => ['required', 'regex:/^[\pL\s\-]+$/u', 'max:50'],
            'ci' => ['required', 'digits_between:5,9', 'numeric'],
            'genero' => ['required', 'in:M,F'],
            'nroCelular' => ['required', 'digits:8', 'numeric'],
            'fechaNacimiento' => ['required', 'date', 'before:today'],
            'direccion' => ['required', 'string', 'max:255'],
        ]);

        // Buscar el beneficiario por ID
        $beneficiario = Beneficiario::findOrFail($id);

        // Llenar con los nuevos datos
        $beneficiario->fill($request->all());

        // Verificar si hubo cambios
        if ($beneficiario->isDirty()) {
            $beneficiario->save();
            return redirect()->route('beneficiario.edit', $beneficiario->id)
                             ->with('success', '¡Beneficiario actualizado correctamente!');
        } else {
            return redirect()->route('beneficiario.edit', $beneficiario->id)
                             ->with('info', 'No se realizaron cambios.');
        }
    }
    public function destroy($id)
    {
        $beneficiario = Beneficiario::findOrFail($id);
        $beneficiario->delete();
        return redirect()->route('beneficiario.index')->with('success', 'Beneficiario eliminado exitosamente');

    }
    public function show($id)
    {
        $beneficiario = Beneficiario::findOrFail($id);
        return view('beneficiario.showBeneficiario', ['beneficiario' => $beneficiario]);
    }
    //EXPORTAR PDF
    public function exportPdf($id)
    {
        $beneficiario = Beneficiario::findOrFail($id);
        $pdf = PDF::loadView('beneficiario.pdfBeneficiario', compact('beneficiario')); // Cargar la vista PDF con el beneficiario
        return $pdf->download('beneficiario_' . $beneficiario->id . '.pdf');
    }
    //EXPORTAR EXCEL
    public function exportExcel()
    {
         $beneficiarios = Beneficiario::all([
        'id',
        'nombre',
        'apellido',
        'ci',
        'genero',
        'nroCelular',
        'fechaNacimiento',
        'direccion'
    ]);

        $datos = $beneficiarios->map(function ($b) {
            return [
                'Id'=>$b->id,
                'Nombre'=>$b->nombre,
                'Apellido'=>$b->apellido,
                'CI'=>$b->ci,
                'Genero'=>$b->genero,
                'Nro celular'=>$b->nroCelular,
                'Fecha de Nacimiento'=>Carbon::parse($b->fechaNacimiento)->format('Y-m-d'),
                'Direccion'=>$b->direccion
            ];
        });
        $path = storage_path('app/public/beneficiarios.xlsx');

        SimpleExcelWriter::create($path)->addRows($datos->toArray());
        return response()->download($path, 'beneficiarios.xlsx')->deleteFileAfterSend(true);

    }

}
