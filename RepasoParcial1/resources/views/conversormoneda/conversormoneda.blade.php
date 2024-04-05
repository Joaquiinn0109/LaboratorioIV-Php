<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moneda</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4">Conversor de Moneda</h2>
            <form method="POST" action="{{ route('convertir') }}">
                @csrf
                <div class="form-group">
                    <label for="cantidad">Cantidad para convertir</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Ingrese la cantidad">
                </div>
                <div class="form-group">
                    <label for="moneda" class="form-label">Selecciona la moneda:</label>
                        <select class="form-select" id="moneda" name="moneda">
                            <option value="Dolar">Dólar</option>
                            <option value="Pesos">Pesos</option>
                            <option value="Euro">Euro</option>
                            <option value="Libra">Libra</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="monedaConvertida" class="form-label">Selecciona a la moneda que desea convertir:</label>
                        <select class="form-select" id="monedaConvertida" name="monedaConvertida">
                            <option value="Dolar">Dólar</option>
                            <option value="Pesos">Pesos</option>
                            <option value="Euro">Euro</option>
                            <option value="Libra">Libra</option>
                        </select>
                </div>
                <button type="submit" class="btn btn-success">Convertir</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>