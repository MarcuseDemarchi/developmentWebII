<!DOCTYPE html>
<html>
<head>
    <title>Calculo de Sono</title>
</head>
<body>
    <h1>Calcular IMC</h1>
    <form action="<?= route("calcSleep") ?>" method="POST">
        @csrf
        <label for="age">Idade</label>
        <input type="number" name="age" required>
        <br>
        <label for="timeSleep">Tempo de Sono</label>
        <input type="number" step="timer" name="timeSleep" required>
        <br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>