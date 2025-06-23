<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Evento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
<h2 class="mb-4 text-center py-3 text-primary">Lista de Eventos</h2>

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
            <th>Título</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Ubicación</th>
            <th>VER</th>
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
            <td><a href="/evento/{{ $evento->id }}/showEvento" class="btn btn-info text-white">
                    <i class="bi bi-eye"></i> Ver
                </a>
            </td>
        <td>  
        <a href="/evento/{{ $evento->id }}/editEvento" class="btn btn-info text-white">
            <i class="bi bi-pencil"></i> Editar
        </a>
    </td>
    <td>
    <!-- Botón que abre el modal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $evento->id }}">
        <i class="bi bi-trash"></i> Eliminar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="confirmDeleteModal{{ $evento->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $evento->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteModalLabel{{ $evento->id }}">Confirmar eliminación</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar al evento <strong>{{ $evento->titulo }} </strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

                    <form action="{{ route('evento.destroy', $evento->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Sí, eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </td>
        </tr>
        @endforeach
    </tbody>
</table>

 <div class="d-grid gap-2 d-md-block">
            <a href="/" class="btn btn-light m-2">
                <i class="bi bi-house-door"></i> Página Principal
            </a>
            <a href="/evento/store" class="btn btn-dark m-2">
                <i class="bi bi-person-plus-fill"></i> Agregar Evento
            </a>
            <a href="{{ route('evento.export.excel') }}" class="btn btn-success mb-3">
                Exportar a Excel
            </a>
        </div>
    </div>
</div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
