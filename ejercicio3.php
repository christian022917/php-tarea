<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de la canción</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Información de la Canción</h1>
        
        <form action="procesar_cancion.php" method="post">
            <div class="form-group">
                <label for="titulo">Título de la canción:</label>
                <input type="text" class="form-control" name="titulo" required>
            </div>

            <div class="form-group">
                <label for="genero">Género de la canción:</label>
                <input type="text" class="form-control" name="genero" required>
            </div>

            <div class="form-group">
                <label for="autor">Autor de la canción:</label>
                <input type="text" class="form-control" name="autor">
            </div>

            <button type="submit" class="btn btn-primary">Mostrar Información</button>
        </form>
    </div>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'Cancion.php';

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $autor = $_POST['autor'];

    $cancion = new Cancion($titulo, $genero);
    $cancion->setAutor($autor);

    echo "<div class='container mt-3'>";
    echo "<h3>Información de la Canción:</h3>";
    $cancion->mostrarDatos();
    echo "</div>";
}
?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>