<?php

class CarritoCompra {
    private $carrito;

    public function __construct() {
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }
        $this->carrito = &$_SESSION['carrito'];
    }

    public function agregarProducto($producto) {
        $this->carrito[] = $producto;
    }

    public function obtenerProductos() {
        return $this->carrito;
    }

    public function vaciarCarrito() {
        $this->carrito = [];
    }

    public function obtenerTotal() {
        $total = 0;
        foreach ($this->carrito as $producto) {
            $total += $producto['precio'];
        }
        return $total;
    }

    public function estaVacio() {
        return empty($this->carrito);
    }
}
?>
