<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento; // Asegúrate de importar el modelo Evento

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function evento()
    {
        return view('evento.store');
    }
    public function beneficiario()
    {
        return view('beneficiario.storeBeneficiario');
    }
    public function grupo()
    {
        return view('grupo.storeGrupo');
    }
}
