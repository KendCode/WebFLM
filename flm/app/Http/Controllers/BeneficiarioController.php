<?php

namespace App\Http\Controllers;

use App\Models\Beneficiario;
use Illuminate\Http\Request;

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
}
