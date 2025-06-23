<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficha del Grupo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: white !important;
            color: #000;
            font-family: Arial, sans-serif;
        }
        .contenedor-pdf {
            margin: 40px auto;
            padding: 20px 30px;
            border: 1px solid #000;
            width: 95%;
            max-width: 850px;
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
            width: 220px;
        }
        .campo .valor {
            display: inline-block;
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
    <h2>Ficha del Grupo de Apoyo</h2>

    <div class="campo">
        <strong>Nombre del Grupo:</strong> <span class="valor">{{ $grupo->nombre }}</span>
    </div>
    <div class="campo">
        <strong>Descripción:</strong>
        <div style="margin-left: 20px;">{{ $grupo->descripcion }}</div>
    </div>
    <div class="campo">
        <strong>Fecha:</strong> <span class="valor">{{ $grupo->fecha }}</span>
    </div>
    <div class="campo">
        <strong>Hora:</strong> <span class="valor">{{ $grupo->hora }}</span>
    </div>
    <div class="campo">
        <strong>Estado:</strong> <span class="valor">{{ $grupo->estado }}</span>
    </div>
    <div class="campo">
        <strong>Número de Participantes:</strong> <span class="valor">{{ $grupo->nroParticipantes }}</span>
    </div>
    <div class="campo">
        <strong>Temática:</strong> <span class="valor">{{ $grupo->tematica }}</span>
    </div>
</div>

</body>
</html>
