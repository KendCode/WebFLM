<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GrupoController;
use App\Models\Evento;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\BeneficiarioController;
use App\Models\Beneficiario;
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class,'index']);
//Route::get('/home/grupo', [HomeController::class,'grupo']);



//Route::get('evento', function () {  
    //return "GRUPO DE APOYO DESDE WEB";

    //$evento = new Evento;
    //AGREGAR
    //$evento->titulo='titulo de la prueba';
    //$evento->descripcion='descripcion de la prueba';
    //$evento->fecha='2025-01-01';
    //$evento->ubicacion='ubicacion de la prueba';
    //$evento->save();
    //return $evento;
    


    //actualizar
    //$evento=Evento::find(1);
    //$evento->titulo='titulo de la prueba';
    //$evento->descripcion='descripcion de la prueba 1';
    //$evento->fecha='2025-01-10';
    //$evento->ubicacion='ubicacion de la prueba 1';
    //$evento->save();
    //return $evento;

    //eliminar
    //$evento=Evento::find(2);
    //$evento->delete();

    //LISTAR
    //$evento=Evento::all();
    //return $evento;
//});

//EVENTO
Route::get('/home/evento/store', [HomeController::class, 'evento'])->name('home.evento');//LLEVA AL FORMULARIO
Route::post('store', [EventoController::class, 'store'])->name('evento.store');// Guardar evento
Route::get('/evento/listaEvento', [EventoController::class, 'index'])->name('evento.index'); // Listar eventos

//BENEFICIARIO
Route::get('/home/beneficiario/storeBeneficiario', [HomeController::class, 'beneficiario'])->name('home.beneficiario');//LLEVA AL FORMULARIO
Route::post('storeBeneficiario', [BeneficiarioController::class, 'store'])->name('beneficiario.store');// Guardar evento
Route::get('/beneficiario/listaBeneficiario', [BeneficiarioController::class, 'index'])->name('beneficiario.index'); // Listar eventos
//GRUPO
Route::get('/home/grupo/storeGrupo', [HomeController::class, 'grupo'])->name('home.grupo');//LLEVA AL FORMULARIO
Route::post('storeGrupo', [GrupoController::class, 'store'])->name('grupo.store');// Guardar evento
Route::get('/grupo/listaGrupo', [GrupoController::class, 'index'])->name('grupo.index'); // Listar eventos
