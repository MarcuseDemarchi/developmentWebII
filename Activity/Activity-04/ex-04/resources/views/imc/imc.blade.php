<!DOCTYPE html>
<html>
<head>
    <title>Calcular IMC</title>
</head>
<body>
    <h1>Calcular IMC</h1>
    <form action="<?= route("calculaImc") ?>" method="POST">
        @csrf
        <label for="weight">Peso (kg):</label>
        <input type="number" name="weight" required>
        <br>
        <label for="height">Altura (m):</label>
        <input type="number" name="height" required>
        <br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>