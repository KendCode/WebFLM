<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GrupoController;
use App\Models\Evento;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home', [HomeController::class,'index']);
//Route::get('/home/grupo', [HomeController::class,'grupo']);

Route::get('/home/evento', [HomeController::class, 'evento'])->name('home.evento');

Route::get('evento', function () {  
    //return "GRUPO DE APOYO DESDE WEB";

    $evento = new Evento;
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
    $evento=Evento::all();
    return $evento;



});
