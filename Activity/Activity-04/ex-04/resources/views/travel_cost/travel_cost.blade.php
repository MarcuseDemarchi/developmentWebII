<!DOCTYPE html>
<html>
<head>
    <title>Cálculo de Viagem</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Cálculo de Gasto de Viagem</h1>

    <form action="{{ route('travelCalculate') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="fuel_type" class="form-label">Tipo de combustível</label>
            <select name="fuel_type" id="fuel_type" class="form-select" required>
                <option value="">Selecione</option>
                <option value="Gasolina">Gasolina</option>
                <option value="Etanol">Etanol</option>
                <option value="Diesel">Diesel</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="fuel_price" class="form-label">Preço do combustível (R$)</label>
            <input type="number" name="fuel_price" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="distance" class="form-label">Distância da viagem (km)</label>
            <input type="number" name="distance" step="0.1" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="consumption" class="form-label">Consumo médio do carro (km/l)</label>
            <input type="number" name="consumption" step="0.1" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
</body>
</html>
