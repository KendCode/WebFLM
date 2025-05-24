@extends('layouts.app')
@section('content')
<div class="container my-5 d-flex align-items-center justify-content-between">
  <p class="h1 mb-0">Crear Beneficiario</p>
  <a href="/beneficiario/listaBeneficiario" class="btn btn-primary">
      LISTA DE BENEFICIARIOS
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

  <form method="POST" action="{{ route('beneficiario.store') }}">
    @csrf
    <div class="row">
      <div class="col">
        <label for="nombre" class="fw-bold">Nombre:</label>
        <input type="text" class="form-control" name="nombre" required>
      </div>
      <div class="col">
        <label for="apellido" class="fw-bold">Apellido:</label>
        <input type="text" class="form-control" name="apellido" required>
      </div>
      <div class="col">
        <label for="ci" class="fw-bold">CI:</label>
        <input type="number" class="form-control" name="ci" required>
      </div>
    </div>
    <div class="row gy-3">
      <div class="col">
        <label for="genero" class="fw-bold">Género:</label>
        <select name="genero" class="form-control" required>
          <option value="M">Masculino</option>
          <option value="F">Femenino</option>
        </select>
      </div>
      <div class="col">
        <label for="nroCelular" class="fw-bold">Número de Celular:</label>
        <input type="number" class="form-control" name="nroCelular" required>
      </div>
      <div class="col">
        <label for="fechaNacimiento" class="fw-bold">Fecha de Nacimiento:</label>
        <input type="date" class="form-control" name="fechaNacimiento" required>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="direccion" class="fw-bold">Dirección:</label>
        <input type="text" class="form-control" name="direccion" required>
      </div>
    </div>
    <div class="col">
      <button type="submit" class="btn btn-primary mt-4">Agregar Beneficiario</button>
    </div>
  </form>
</div>
@endsection
