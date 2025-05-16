<?php
session_start();
require_once(__DIR__ . '/../modelo/CarritoCompra.php');

$datos = json_decode(file_get_contents("php://input"), true);

class CarritoControlador {
    private $carrito;

    public function __construct() {
        $this->carrito = new CarritoCompra();
    }

   private function obtenerProductoPorId($id) {
    $productos = [
        0 => ['nombre' => 'Lavadora 11 Kilogramos Haceb Panel Frontal Digital Gris', 'precio' => 50000, 'imagen' => '../IMAGENES/7704353431483-1.webp'],
        1 => ['nombre' => 'Televisor 32 Pulgadas Challenger LED TV3', 'precio' => 65000, 'imagen' => '../IMAGENES/7705191043944_01.webp'],
        2 => ['nombre' => 'Xbox 360', 'precio' => 49900, 'imagen' => '../IMAGENES/41G+FzEeRCL.jpg'],
        3 => ['nombre' => 'CAMPING IGLU ROYAKAMP 4 PERSONAS', 'precio' => 35000, 'imagen' => '../IMAGENES/tienda-turistica-aislado-sobre-fondo-blanco_873674-588.avif'],
        4 => ['nombre' => 'Renault Kwid 2019', 'precio' => 500000, 'imagen' => '../IMAGENES/Renault Kwid.jpeg'],
        5 => ['nombre' => 'PC Gamer Ryzen 5', 'precio' => 150000, 'imagen' => '../IMAGENES/PCRYZEN.webp'],
    ];

        return $productos[$id] ?? null;
    }

    public function agregarProducto($productoId, $cantidad) {
        $producto = $this->obtenerProductoPorId($productoId);
        if (!$producto) {
            throw new Exception('Producto no encontrado');
        }
        $producto['cantidad'] = $cantidad;
        $this->carrito->agregarProducto($producto);
    }

    public function mostrarCarrito() {
        return $this->carrito->obtenerProductos();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($datos['producto_id'], $datos['cantidad'])) {
        try {
            $controlador = new CarritoControlador();
            $controlador->agregarProducto($datos['producto_id'], $datos['cantidad']);
            echo json_encode(['success' => true, 'mensaje' => 'Producto agregado al carrito']);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'mensaje' => $e->getMessage()]);
        }
    } else {
        echo json_encode(['success' => false, 'mensaje' => 'Datos incompletos']);
    }
} else {
    echo json_encode(['success' => false, 'mensaje' => 'Método no permitido']);
}
