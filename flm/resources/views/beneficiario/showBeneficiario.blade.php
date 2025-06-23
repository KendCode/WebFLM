<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Beneficiario</title>
    <!-- Bootstrap CSS e íconos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success m-3">{{ session('success') }}</div>
    @endif

    <div class="card shadow-lg">
        <div class="card-header bg-info text-white text-center">
            <h2><i class="bi bi-person-lines-fill"></i> Datos del Beneficiario</h2>
        </div>
        
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label"><strong>Nombre:</strong></label>
                <p class="form-control-plaintext">{{ $beneficiario->nombre }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Apellido:</strong></label>
                <p class="form-control-plaintext">{{ $beneficiario->apellido }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>CI:</strong></label>
                <p class="form-control-plaintext">{{ $beneficiario->ci }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Género:</strong></label>
                <p class="form-control-plaintext">
                    {{ $beneficiario->genero == 'M' ? 'Masculino' : 'Femenino' }}
                </p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Número de Celular:</strong></label>
                <p class="form-control-plaintext">{{ $beneficiario->nroCelular }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Fecha de Nacimiento:</strong></label>
                <p class="form-control-plaintext">{{ $beneficiario->fechaNacimiento }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Dirección:</strong></label>
                <p class="form-control-plaintext">{{ $beneficiario->direccion }}</p>
            </div>
        </div>

        <div class="card-footer d-flex justify-content-between">
            <button class="btn btn-outline-primary" onclick="window.open('{{ route('beneficiario.export.Pdf', $beneficiario->id) }}')">
                <i class="bi bi-file-earmark-pdf"></i> Descargar PDF
            </button>
            <a href="/beneficiario/listaBeneficiario" class="btn btn-secondary">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
