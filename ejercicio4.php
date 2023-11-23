<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la Cuenta</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Información de la Cuenta</h1>
        
        <form action="procesar_cuenta.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad inicial:</label>
                <input type="number" step="0.01" class="form-control" name="cantidad" required>
            </div>

            <div class="form-group">
                <label for="tipoCuenta">Tipo de cuenta:</label>
                <input type="text" class="form-control" name="tipoCuenta" required>
            </div>

            <div class="form-group">
                <label for="numeroCuenta">Número de cuenta:</label>
                <input type="text" class="form-control" name="numeroCuenta" required>
            </div>

            <button type="submit" class="btn btn-primary" name="depositar">Depositar</button>
            <button type="submit" class="btn btn-primary" name="retirar">Retirar</button>
            <button type="submit" class="btn btn-primary" name="mostrarDatos">Mostrar Datos</button>
        </form>
    </div>
    
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'Cuenta.php';

    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $tipoCuenta = $_POST['tipoCuenta'];
    $numeroCuenta = $_POST['numeroCuenta'];

    $cuenta = new Cuenta($nombre, $cantidad, $tipoCuenta, $numeroCuenta);

    if (isset($_POST['depositar'])) {
        $cuenta->depositar($cantidad);
    } 

    elseif (isset($_POST['retirar'])) {
        $cuenta->retirar($cantidad);
    } 

    elseif (isset($_POST['mostrarDatos'])) {
        echo "<div class='container mt-3'>";
        echo "<h3>Información de la Cuenta:</h3>";
        $cuenta->mostrarDatos();
        echo "</div>";
    }
}
?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>