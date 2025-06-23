<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Evento</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <h1 class="mb-4"><i class="bi bi-eye"></i> Detalles del Evento</h1>

    <!-- Alerta de éxito -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="container p-5 border rounded shadow-sm bg-white">
        <div class="row mb-3">
            <div class="col">
                <label class="fw-bold"><i class="bi bi-file-earmark-text"></i> Título:</label>
                <input type="text" class="form-control" value="{{ $evento->titulo }}" readonly>
            </div>
            <div class="col">
                <label class="fw-bold"><i class="bi bi-geo-alt"></i> Lugar del Evento:</label>
                <input type="text" class="form-control" value="{{ $evento->ubicacion }}" readonly>
            </div>
            <div class="col">
                <label class="fw-bold"><i class="bi bi-calendar"></i> Fecha:</label>
                <input type="date" class="form-control" value="{{ $evento->fecha }}" readonly>
            </div>
        </div>
        <div class="row gy-3 mb-3">
            <div class="col">
                <label class="fw-bold"><i class="bi bi-chat-dots"></i> Descripción:</label>
                <textarea class="form-control" rows="4" readonly>{{ $evento->descripcion }}</textarea>
            </div>
        </div>
        <div class="text-end">
            <button class="btn btn-outline-primary" onclick="window.open('{{ route('evento.export.Pdf', $evento->id) }}')">
                <i class="bi bi-file-earmark-pdf"></i> Descargar PDF
            </button>
            <a href="/evento/listaEvento" class="btn btn-secondary ms-2">
                <i class="bi bi-arrow-left"></i> Volver Atrás
            </a>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
