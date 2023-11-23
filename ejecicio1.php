
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera Página</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Configuración de Cabecera Página</h1>
        
        <form action="procesar.php" method="post">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" name="titulo" required>
            </div>

            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" class="form-control" name="color" required>
            </div>

            <div class="form-group">
                <label for="fuente">Fuente:</label>
                <input type="text" class="form-control" name="fuente" required>
            </div>

            <div class="form-group">
                <label for="alineacion">Alineación del título:</label>
                <select class="form-control" name="alineacion" required>
                    <option value="izquierda">Izquierda</option>
                    <option value="centro">Centro</option>
                    <option value="derecha">Derecha</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'CabeceraPagina.php'; 

    $cabecera = new CabeceraPagina();
    $cabecera->setPropiedades($_POST['titulo'], $_POST['color'], $_POST['fuente']);
    $cabecera->setAlineacion($_POST['alineacion']);

    echo "<h1>Propiedades de la Cabecera Página</h1>";
    $cabecera->imprimirPropiedades();
}
?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>