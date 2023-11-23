<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Calculadora</h1>
        
        <form action="procesar_calculadora.php" method="post">
            <div class="form-group">
                <label for="num1">Número 1:</label>
                <input type="number" class="form-control" name="num1" required>
            </div>

            <div class="form-group">
                <label for="num2">Número 2:</label>
                <input type="number" class="form-control" name="num2" required>
            </div>

            <button type="submit" class="btn btn-primary" name="sumar">Sumar</button>
            <button type="submit" class="btn btn-primary" name="restar">Restar</button>
            <button type="submit" class="btn btn-primary" name="multiplicar">Multiplicar</button>
            <button type="submit" class="btn btn-primary" name="dividir">Dividir</button>
            <button type="submit" class="btn btn-primary" name="potencia">Potencia</button>
            <button type="submit" class="btn btn-primary" name="factorial">Factorial</button>
        </form>
    </div>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'Calculadora.php'; 

    $calculadora = new Calculadora();
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (isset($_POST['sumar'])) {

        $resultado = $calculadora->sumar($num1, $num2);}

    elseif (isset($_POST['restar'])) {
        $resultado = $calculadora->restar($num1, $num2);
    } 
    elseif (isset($_POST['multiplicar'])) {
        $resultado = $calculadora->multiplicar($num1, $num2);
    } 
    elseif (isset($_POST['dividir'])) {
        $resultado = $calculadora->dividir($num1, $num2);
    } 
    elseif (isset($_POST['potencia'])) {
        $resultado = $calculadora->potencia($num1, $num2);
    } 
    elseif (isset($_POST['factorial'])) {
        $resultado = $calculadora->factorial($num1);
    }

    echo "<div class='container mt-3'>";
    echo "<h3>Resultado:</h3>";
    echo "<p>{$resultado}</p>";
    echo "</div>";
}
?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>