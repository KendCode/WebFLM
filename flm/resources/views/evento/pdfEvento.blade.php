<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficha del Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: white !important;
            color: #000;
            font-family: 'Arial', sans-serif;
        }
        .contenedor-pdf {
            margin: 40px auto;
            padding: 20px 30px;
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
    <h2>Ficha del Evento</h2>

    <div class="campo">
        <strong>Título del Evento:</strong> {{ $evento->titulo }}
    </div>

    <div class="campo">
        <strong>Lugar:</strong> {{ $evento->ubicacion }}
    </div>

    <div class="campo">
        <strong>Fecha:</strong> {{ $evento->fecha }}
    </div>

    <div class="campo">
        <strong>Descripción:</strong><br>
        <div style="margin-left: 20px;">{{ $evento->descripcion }}</div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
