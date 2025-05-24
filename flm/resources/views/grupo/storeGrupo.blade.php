@extends('layouts.app')
@section('content')
<div class="container my-5 d-flex align-items-center justify-content-between">
  <p class="h1 mb-0">Crear Grupo</p>
  <a href="/grupo/listaGrupo" class="btn btn-primary">
      LISTA DE GRUPOS
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

  <form method="POST" action="{{ route('grupo.store') }}">
    @csrf
    <div class="row">
      <div class="col">
        <label for="nombre" class="fw-bold">Nombre del Grupo:</label>
        <input type="text" class="form-control" name="nombre" required>
      </div>
      <div class="col">
        <label for="descripcion" class="fw-bold">Descripción:</label>
        <textarea class="form-control" name="descripcion" rows="3" required></textarea>
      </div>
    </div>
    <div class="row gy-3">
      <div class="col">
        <label for="fecha" class="fw-bold">Fecha:</label>
        <input type="date" class="form-control" name="fecha" required>
      </div>
      <div class="col">
        <label for="hora" class="fw-bold">Hora:</label>
        <input type="time" class="form-control" name="hora" required>
      </div>
      <div class="col">
        <label for="estado" class="fw-bold">Estado:</label>
        <select name="estado" class="form-control" required>
          <option value="Activo">Activo</option>
          <option value="Suspendido">Suspendido</option>
          <option value="Finalizado">Finalizado</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="nroParticipantes" class="fw-bold">Número de Participantes:</label>
        <input type="number" class="form-control" name="nroParticipantes" required>
      </div>
      <div class="col">
        <label for="tematica" class="fw-bold">Temática:</label>
        <input type="text" class="form-control" name="tematica" required>
      </div>
    </div>
    <div class="col">
      <button type="submit" class="btn btn-primary mt-4">Agregar Grupo</button>
    </div>
  </form>
</div>
@endsection
