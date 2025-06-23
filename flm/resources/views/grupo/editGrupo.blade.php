<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Grupo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <h1 class="mb-4"><i class="bi bi-pencil-square"></i> Editar Grupo</h1>

    <!-- Alerta de éxito -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="container p-5 border rounded shadow-sm">
        <form method="POST" action="{{ route('grupo.update', $grupo->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <label for="nombre" class="fw-bold"><i class="bi bi-people"></i> Nombre del Grupo:</label>
                    <input type="text" class="form-control" name="nombre" value="{{ $grupo->nombre }}" required>
                </div>
                <div class="col">
                    <label for="descripcion" class="fw-bold"><i class="bi bi-chat-dots"></i> Descripción:</label>
                    <textarea class="form-control" name="descripcion" rows="3" required>{{ $grupo->descripcion }}</textarea>
                </div>
            </div>
            <div class="row gy-3">
                <div class="col">
                    <label for="fecha" class="fw-bold"><i class="bi bi-calendar"></i> Fecha:</label>
                    <input type="date" class="form-control" name="fecha" value="{{ $grupo->fecha }}" required>
                </div>
                <div class="col">
                    <label for="hora" class="fw-bold"><i class="bi bi-clock"></i> Hora:</label>
                    <input type="time" class="form-control" name="hora" value="{{ $grupo->hora }}" required>
                </div>
                <div class="col">
                    <label for="estado" class="fw-bold"><i class="bi bi-toggle-on"></i> Estado:</label>
                    <select name="estado" class="form-control" required>
                        <option value="Activo" {{ $grupo->estado == 'Activo' ? 'selected' : '' }}>Activo</option>
                        <option value="Suspendido" {{ $grupo->estado == 'Suspendido' ? 'selected' : '' }}>Suspendido</option>
                        <option value="Finalizado" {{ $grupo->estado == 'Finalizado' ? 'selected' : '' }}>Finalizado</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="nroParticipantes" class="fw-bold"><i class="bi bi-person-plus"></i> Número de Participantes:</label>
                    <input type="number" class="form-control" name="nroParticipantes" value="{{ $grupo->nroParticipantes }}" required>
                </div>
                <div class="col">
                    <label for="tematica" class="fw-bold"><i class="bi bi-file-earmark-text"></i> Temática:</label>
                    <input type="text" class="form-control" name="tematica" value="{{ $grupo->tematica }}" required>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary mt-4"><i class="bi bi-save"></i> Actualizar Grupo</button>
                <a href="/grupo/listaGrupo" class="btn btn-secondary mt-4"><i class="bi bi-arrow-left"></i> Volver Atrás</a>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>