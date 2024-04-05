<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Propina</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4">Calculadora de Propina</h2>
            <form method="POST" action="{{ route('calcular') }}">
                @csrf
                <div class="form-group">
                    <label for="total">Total de la cuenta</label>
                    <input type="text" class="form-control" id="total" name="total" placeholder="Ingrese el total">
                </div>
                <div class="form-group">
                    <label for="porcentaje">Porcentaje de propina</label>
                    <input type="text" class="form-control" id="porcentaje" name="porcentaje" placeholder="Ingrese el porcentaje">
                </div>
                <button type="submit" class="btn btn-success">Calcular Propina</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
