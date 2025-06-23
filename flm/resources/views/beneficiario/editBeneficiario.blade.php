<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($beneficiario) ? 'Editar Beneficiario' : 'Crear Beneficiario' }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success m-3">{{ session('success') }}</div>
    @endif

    @if(session('info'))
        <div class="alert alert-info m-3">{{ session('info') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger m-3">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-lg">
        <div class="card-header bg-warning text-dark text-center">
            <h2>{{ isset($beneficiario) ? 'Editar Beneficiario' : 'Crear Beneficiario' }}</h2>
        </div>
        <form action="{{ route('beneficiario.update', $beneficiario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label"><strong>Nombre:</strong></label>
                    <input type="text" name="nombre" class="form-control" value="{{ $beneficiario->nombre ?? '' }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label"><strong>Apellido:</strong></label>
                    <input type="text" name="apellido" class="form-control" value="{{ $beneficiario->apellido ?? '' }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label"><strong>CI:</strong></label>
                    <input type="number" name="ci" class="form-control" value="{{ $beneficiario->ci ?? '' }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label"><strong>Género:</strong></label>
                    <select name="genero" class="form-control" required>
                        <option value="M" {{ (isset($beneficiario) && $beneficiario->genero == 'M') ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ (isset($beneficiario) && $beneficiario->genero == 'F') ? 'selected' : '' }}>Femenino</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label"><strong>Número de Celular:</strong></label>
                    <input type="number" name="nroCelular" class="form-control" value="{{ $beneficiario->nroCelular ?? '' }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label"><strong>Fecha de Nacimiento:</strong></label>
                    <input type="date" name="fechaNacimiento" class="form-control" value="{{ $beneficiario->fechaNacimiento ?? '' }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label"><strong>Dirección:</strong></label>
                    <input type="text" name="direccion" class="form-control" value="{{ $beneficiario->direccion ?? '' }}" required>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="/beneficiario/listaBeneficiario" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>