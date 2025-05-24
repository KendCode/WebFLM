@extends('layouts.app')
@section('content')
<div class="container my-5  d-flex align-items-center justify-content-between">
  <p class="h1 mb-0">Crear Evento</p>
  <a href="/evento/listaEvento" class="btn btn-primary">
      LISTA DE EVENTOS
  </a>
</div>
    <div class="container p-5 border">
        
         <!-- Alerta de éxito -->
         @if(session('success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
             {{ session('success') }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
        @endif

        <form method="POST" action="{{ route('evento.store') }}">
          @csrf
            <div class="row">
              <div class="col">
                <label for="titulo" class="fw-bold">Titulo:</label>
                <input type="text" class="form-control" placeholder="" name="titulo">
              </div>
              <div class="col">
                <label for="ubicacion" class="fw-bold">Lugar del Evento:</label>
                <input type="text" class="form-control" placeholder="" name="ubicacion">
              </div>
              <div class="col">
                <label for="fecha" class="fw-bold">Fecha:</label>
                <input type="date" class="form-control" placeholder="" name="fecha">
              </div>
            </div>
            <div class="row gy-3">
              <div class="col">
                <label for="descripcion" class="fw-bold">Descripcion:</label>
                <textarea name="descripcion" class="form-control rounded-3" rows="4" required></textarea>  
              </div>
            </div>
              <div class="col">
                <button type="submit" class="btn btn-primary mt-4" name="crear">Agregar Evento</button>
              </div>
            </div>
          </form>
    </div>
@endsection