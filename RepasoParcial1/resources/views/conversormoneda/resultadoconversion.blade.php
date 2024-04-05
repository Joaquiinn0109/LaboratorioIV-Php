<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Calculadora</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Resultados de la Conversion</h1>
            @if(isset($cantidad) && isset($moneda) && isset($monedaConvertida) && isset($resultado))
                <div class="card">
                    <div class="card-body">
                        <p><strong>Monto a convertir:</strong> ${{ $cantidad }}</p>
                        <p><strong>Moneda actual:</strong> {{ $moneda }}</p>
                        <p><strong>Moneda seleccionada:</strong> {{ $monedaConvertida }}</p>
                        <div class="bg-success text-white p-2">
                            <p><strong>Resultado de la conversion:</strong> ${{ $resultado }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>