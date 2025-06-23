<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha del Beneficiario</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: white !important;
            color: #000;
        }
        .contenedor-pdf {
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #000;
            width: 95%;
            max-width: 800px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            text-transform: uppercase;
        }
        .campo {
            margin-bottom: 15px;
        }
        .campo strong {
            display: inline-block;
            width: 200px;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="contenedor-pdf">
    <h2>Ficha del Beneficiario</h2>

    <div class="campo">
        <strong>Nombre:</strong> {{ $beneficiario->nombre ?? '' }}
    </div>
    <div class="campo">
        <strong>Apellido:</strong> {{ $beneficiario->apellido ?? '' }}
    </div>
    <div class="campo">
        <strong>CI:</strong> {{ $beneficiario->ci ?? '' }}
    </div>
    <div class="campo">
        <strong>Género:</strong> {{ $beneficiario->genero == 'M' ? 'Masculino' : 'Femenino' }}
    </div>
    <div class="campo">
        <strong>Número de Celular:</strong> {{ $beneficiario->nroCelular ?? '' }}
    </div>
    <div class="campo">
        <strong>Fecha de Nacimiento:</strong> {{ $beneficiario->fechaNacimiento ?? '' }}
    </div>
    <div class="campo">
        <strong>Dirección:</strong> {{ $beneficiario->direccion ?? '' }}
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
