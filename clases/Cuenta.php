<?php
class Cuenta {
    private $nombre;
    private $cantidad;
    private $tipoCuenta;
    private $numeroCuenta;

    public function __construct($nombre, $cantidad, $tipoCuenta, $numeroCuenta) {
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->tipoCuenta = $tipoCuenta;
        $this->numeroCuenta = $numeroCuenta;
    }

    public function depositar($cantidad) {
        if ($cantidad < 5.00) {
            echo "El valor a depositar debe ser mayor a $5.00.";
        } else {
            $this->cantidad += $cantidad;
            echo "Se ha depositado correctamente. Cantidad depositada: $cantidad";
        }
    }

    public function retirar($valor) {
        if ($this->cantidad < 5.00) {
            echo "No hay suficiente saldo en la cuenta.";
        } else {
            $this->cantidad -= $valor;
            echo "Se ha retirado $valor. Saldo restante: $this->cantidad";
        }
    }

    public function mostrarDatos() {
        echo "<p>Nombre: {$this->nombre}</p>";
        echo "<p>Tipo de cuenta: {$this->tipoCuenta}</p>";
        echo "<p>Número de cuenta: {$this->numeroCuenta}</p>";
    }
}
?>