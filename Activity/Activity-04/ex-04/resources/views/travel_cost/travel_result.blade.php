<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Viagem</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Resultado do Cálculo</h1>

    <ul class="list-group mb-4">
        <li class="list-group-item">Tipo de combustível: <strong>{{ $fuelType }}</strong></li>
        <li class="list-group-item">Preço do combustível: R$ <strong>{{ number_format($fuelPrice, 2, ',', '.') }}</strong></li>
        <li class="list-group-item">Distância da viagem: <strong>{{ $distance }} km</strong></li>
        <li class="list-group-item">Consumo médio do carro: <strong>{{ $consumption }} km/l</strong></li>
        <li class="list-group-item">Litros necessários: <strong>{{ number_format($totalLiters, 2, ',', '.') }} L</strong></li>
        <li class="list-group-item">Custo total da viagem: R$ <strong>{{ number_format($totalCost, 2, ',', '.') }}</strong></li>
    </ul>

    <a href="{{ url('/travel_cost') }}" class="btn btn-secondary">Novo cálculo</a>
</body>
</html>
