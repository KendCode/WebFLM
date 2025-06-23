<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <h1 class="mb-4"><i class="bi bi-pencil-square"></i> Editar Evento</h1>

    <!-- Alerta de éxito -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="container p-5 border rounded shadow-sm">
        <form method="POST" action="{{ route('evento.update', $evento->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <label for="titulo" class="fw-bold"><i class="bi bi-file-earmark-text"></i> Título:</label>
                    <input type="text" class="form-control" name="titulo" value="{{ $evento->titulo }}" required>
                </div>
                <div class="col">
                    <label for="ubicacion" class="fw-bold"><i class="bi bi-geo-alt"></i> Lugar del Evento:</label>
                    <input type="text" class="form-control" name="ubicacion" value="{{ $evento->ubicacion }}" required>
                </div>
                <div class="col">
                    <label for="fecha" class="fw-bold"><i class="bi bi-calendar"></i> Fecha:</label>
                    <input type="date" class="form-control" name="fecha" value="{{ $evento->fecha }}" required>
                </div>
            </div>
            <div class="row gy-3">
                <div class="col">
                    <label for="descripcion" class="fw-bold"><i class="bi bi-chat-dots"></i> Descripción:</label>
                    <textarea name="descripcion" class="form-control rounded-3" rows="4" required>{{ $evento->descripcion }}</textarea>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary mt-4" name="editar"><i class="bi bi-save"></i> Actualizar Evento</button>
                <a href="/evento/listaEvento" class="btn btn-secondary mt-4"><i class="bi bi-arrow-left"></i> Volver Atrás</a>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>