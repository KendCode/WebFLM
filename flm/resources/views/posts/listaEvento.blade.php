@extends('layouts.app')

@section('content')
<h2 class="mb-4 text-center text-success">Lista de Eventos</h2>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<table class="table table-striped table-bordered">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Ubicación</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($eventos as $evento) <!-- Cambia la variable a $eventos -->
        <tr>
            <td>{{ $evento->id }}</td>
            <td>{{ $evento->titulo }}</td>
            <td>{{ $evento->descripcion }}</td>
            <td>{{ $evento->fecha }}</td>
            <td>{{ $evento->ubicacion }}</td>
            <td><button type="button" class="btn btn-info text-white">Modificar</button></td>
            <td><button type="button" class="btn btn-danger">Eliminar</button></td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-grid gap-2 d-md-block">
    <a href="/home" class="bi bi-people-fill">
        <button type="button" class="m4 btn btn-light">PAGINA PRINCIPAL</button>
    </a>
    <a href="/home/evento" class="bi bi-people-fill">
        <button type="button" class="m4 btn btn-dark">AGREGAR EVENTO</button>
    </a>
    
  </div>
@endsection
