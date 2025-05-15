<?php
class Producto {
    private $nombre;
    private $imagenUrl;
    private $precio;
    private $unidadTiempoPrecio;
    private $descripcionGeneral;
    private $urlDetalle;

    // Constructor (puede variar según tu implementación)
    public function __construct($nombre, $imagenUrl, $precio, $unidadTiempoPrecio, $descripcionGeneral, $urlDetalle) {
        $this->nombre = $nombre;
        $this->imagenUrl = $imagenUrl;
        $this->precio = $precio;
        $this->unidadTiempoPrecio = $unidadTiempoPrecio;
        $this->descripcionGeneral = $descripcionGeneral;
        $this->urlDetalle = $urlDetalle;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getImagenUrl() {
        return $this->imagenUrl;
    }

    public function getPrecioFormateado() {
        return '$' . number_format($this->precio, 0, ',', '.');
    }

    public function getUnidadTiempoPrecio() {
        return $this->unidadTiempoPrecio;
    }

    public function getDescripcionGeneral() {
        return $this->descripcionGeneral;
    }

    public function getUrlDetalle() {
        return $this->urlDetalle;
    }
}
?>