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
Route::get('/evento/store', [HomeController::class, 'evento'])->name('home.evento');//LLEVA AL FORMULARIO
Route::post('store', [EventoController::class, 'store'])->name('evento.store');// Guardar evento
Route::get('/evento/listaEvento', [EventoController::class, 'index'])->name('evento.index'); // Listar eventos
Route::get('/evento/{id}/editEvento', [EventoController::class, 'editEvento'])->name('evento.edit'); // Editar evento
Route::put('/evento/{id}', [EventoController::class, 'update'])->name('evento.update'); // Actualizar evento
Route::delete('/evento/{id}', [EventoController::class, 'destroy'])->name('evento.destroy'); // Eliminar evento
Route::get('/evento/{id}/showEvento', [EventoController::class, 'show'])->name('evento.show'); // Mostrar evento
Route::get('/evento/{id}/pdf',[EventoController::class,'exportPdf'])
    ->name('evento.export.Pdf');
Route::get('/evento/exportExcel', [EventoController::class, 'exportExcel'])
    ->name('evento.export.excel'); // Exportar a Excel



//BENEFICIARIO
Route::get('/beneficiario/storeBeneficiario', [HomeController::class, 'beneficiario'])->name('home.beneficiario');//LLEVA AL FORMULARIO
Route::post('storeBeneficiario', [BeneficiarioController::class, 'store'])->name('beneficiario.store');// Guardar beneficiario
Route::get('/beneficiario/listaBeneficiario', [BeneficiarioController::class, 'index'])->name('beneficiario.index'); // Listar bemeficiarios
Route::get('/beneficiario/{id}/editBeneficiario', [BeneficiarioController::class, 'editBeneficiario'])->name('beneficiario.edit'); // Editar beneficiario
Route::put('/beneficiario/{id}', [BeneficiarioController::class, 'update'])->name('beneficiario.update'); // Actualizar beneficiario
Route::delete('/beneficiario/{id}', [BeneficiarioController::class, 'destroy'])->name('beneficiario.destroy'); // Eliminar beneficiario
Route::get('/beneficiario/{id}/showBeneficiario', [BeneficiarioController::class, 'show'])->name('beneficiario.show'); // Mostrar beneficiario
Route::get('/beneficiario/{id}/pdf',[BeneficiarioController::class,'exportPdf'])
    ->name('beneficiario.export.Pdf');
Route::get('/beneficiario/exportExcel', [BeneficiarioController::class, 'exportExcel'])
    ->name('beneficiario.export.excel'); // Exportar a Excel


//GRUPO
Route::get('/grupo/storeGrupo', [HomeController::class, 'grupo'])->name('home.grupo');//LLEVA AL FORMULARIO
Route::post('storeGrupo', [GrupoController::class, 'store'])->name('grupo.store');// Guardar GRUPO
Route::get('/grupo/listaGrupo', [GrupoController::class, 'index'])->name('grupo.index'); // Listar GRUPO
Route::get('/grupo/{id}/editGrupo', [GrupoController::class, 'editGrupo'])->name('grupo.edit'); // Editar GRUPO
Route::put('/grupo/{id}', [GrupoController::class, 'update'])->name('grupo.update'); // Actualizar GRUPO
Route::delete('/grupo/{id}', [GrupoController::class, 'destroy'])->name('grupo.destroy'); // Eliminar GRUPO 
Route::get('/grupo/{id}/showGrupo', [GrupoController::class, 'show'])->name('grupo.show'); // Mostrar GRUPO
Route::get('/grupo/{id}/pdf',[GrupoController::class,'exportPdf'])
    ->name('grupo.export.Pdf');
Route::get('/grupo/exportExcel', [GrupoController::class, 'exportExcel'])
    ->name('grupo.export.excel'); // Exportar a Excel