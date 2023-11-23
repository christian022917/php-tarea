<?php
class Cancion {
    private $titulo;
    private $genero;
    private $autor;

    public function __construct($titulo, $genero) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->autor = "";
    }

    // Métodos get y set para la propiedad autor
    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    // Método para mostrar los datos de la canción
    public function mostrarDatos() {
        echo "<p>Título: {$this->titulo}</p>";
        echo "<p>Género: {$this->genero}</p>";
        echo "<p>Autor: {$this->autor}</p>";
    }
}
?>