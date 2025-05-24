@extends('layouts.app')

@section('content')
<h2 class="mb-4 text-center py-3 text-primary">Lista de Beneficiarios</h2>

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
            <th>Apellido</th>
            <th>CI</th>
            <th>Género</th>
            <th>Número de Celular</th>
            <th>Fecha de Nacimiento</th>
            <th>Dirección</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($beneficiarios as $beneficiario)
        <tr>
            <td>{{ $beneficiario->id }}</td>
            <td>{{ $beneficiario->nombre }}</td>
            <td>{{ $beneficiario->apellido }}</td>
            <td>{{ $beneficiario->ci }}</td>
            <td>{{ $beneficiario->genero == 'M' ? 'Masculino' : 'Femenino' }}</td>
            <td>{{ $beneficiario->nroCelular }}</td>
            <td>{{ $beneficiario->fechaNacimiento }}</td>
            <td>{{ $beneficiario->direccion }}</td>
            <td><button type="button" class="btn btn-info text-white">Modificar</button></td>
            <td><button type="button" class="btn btn-danger">Eliminar</button></td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-grid gap-2 d-md-block">
    <a href="/" class="bi bi-people-fill">
        <button type="button" class="m4 btn btn-light">PÁGINA PRINCIPAL</button>
    </a>
    <a href="/beneficiario/storeBeneficiario" class="bi bi-people-fill">
        <button type="button" class="m4 btn btn-dark">AGREGAR BENEFICIARIO</button>
    </a>
</div>
@endsection
