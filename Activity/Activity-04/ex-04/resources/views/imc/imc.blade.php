<!DOCTYPE html>
<html>
<head>
    <title>Calcular IMC</title>
</head>
<body>
    <h1>Calcular IMC</h1>
    <form action="/imc/calculate" method="POST">
        @csrf
        <label for="weight">Peso (kg):</label>
        <input type="number" name="weight" required>
        <br>
        <label for="height">Altura (m):</label>
        <input type="number" step="0.01" name="height" required>
        <br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>