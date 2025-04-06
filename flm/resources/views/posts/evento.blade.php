@extends('layouts.app')
@section('content')
    <div class="container p-5 my-5 border">
        <p class="h1">Evento</p>
        <form method="POST" action="">
            <div class="row">
              <div class="col">
                <label for="titulo" class="fw-bold">Titulo:</label>
                <input type="text" class="form-control" placeholder="" name="titulo">
              </div>
              <div class="col">
                <label for="descripcion" class="fw-bold">Descripcion:</label>
                <input type="text" class="form-control" placeholder="" name="descripcion">
              </div>
              <div class="col">
                <label for="fecha" class="fw-bold">Fecha:</label>
                <input type="date" class="form-control" placeholder="" name="fecha">
              </div>
            </div>
            <div class="row gy-3">
              <div class="col">
                <label for="ubicacion" class="fw-bold">Lugar del Evento:</label>
                <input type="text" class="form-control" placeholder="" name="ubicacion">
              </div>
            </div>
              <div class="col">
                <button type="submit" class="btn btn-success mt-4" name="crear">Crear</button>
              </div>
            </div>
          </form>
    </div>
@endsection