<?php
class CabeceraPagina {
    private $titulo;
    private $color;
    private $fuente;
    private $alineacion;

    public function setPropiedades($titulo, $color, $fuente) {
        $this->titulo = $titulo;
        $this->color = $color;
        $this->fuente = $fuente;
    }

    public function setAlineacion($alineacion) {
        $this->alineacion = $alineacion;
    }

    public function imprimirPropiedades() {
        echo "Título: {$this->titulo}<br>";
        echo "Color: {$this->color}<br>";
        echo "Fuente: {$this->fuente}<br>";
        echo "Alineación: {$this->alineacion}<br>";
    }
}
?>