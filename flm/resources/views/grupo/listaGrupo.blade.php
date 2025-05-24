@extends('layouts.app')

@section('content')
<h2 class="mb-4 text-center py-3 text-primary">Lista de Grupo</h2>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<table class="table table-striped table-bordered">
    <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Estado</th>
            <th>Número de Participantes</th>
            <th>Temática</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($grupos as $grupo)
        <tr>
            <td>{{ $grupo->id }}</td>
            <td>{{ $grupo->nombre }}</td>
            <td>{{ $grupo->descripcion }}</td>
            <td>{{ $grupo->fecha }}</td>
            <td>{{ $grupo->hora }}</td>
            <td>{{ $grupo->estado }}</td>
            <td>{{ $grupo->nroParticipantes }}</td>
            <td>{{ $grupo->tematica }}</td>
            <td><button type="button" class="btn btn-info text-white">Modificar</button></td>
            <td><button type="button" class="btn btn-danger">Eliminar</button></td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-grid gap-2 d-md-block">
    <a href="/" class="bi bi-house-fill">
        <button type="button" class="m4 btn btn-light">PÁGINA PRINCIPAL</button>
    </a>
    <a href="/grupo/storeGrupo" class="bi bi-calendar-plus-fill">
        <button type="button" class="m4 btn btn-dark">AGREGAR GRUPO</button>
    </a>
</div>
@endsection
